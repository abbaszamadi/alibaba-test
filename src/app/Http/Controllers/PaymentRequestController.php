<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PaymentRequest;
use App\Services\PaymentRequestService;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PaymentRequests\StorePaymentRequest;
use App\Http\Requests\PaymentRequests\UpdatePaymentRequest;

class PaymentRequestController extends Controller
{
    
    public function __construct()
    {
        $this->authorizeResource(PaymentRequest::class, 'payment_request');
    }

    /**
        * Display a listing of the resource.
        *
        * @return Response
        */

    public function index()
    {
        $paymentRequests = PaymentRequest::with(['user', 'creator'])->get();
    
        return view('payment_requests.index', compact('paymentRequests'));
    }


    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {
        $users = User::get();
        return view('payment_requests.create', compact('users'));
    }


    /**
    * Display the specified resource.
    *
    * @param  PaymentRequest  $paymentRequest
    * @return Response
    */
    public function show(PaymentRequest $paymentRequest)
    {
        return view('payment_requests.view', compact('paymentRequest'));
    }


    /**
    * Store a newly created resource in storage.
    * @param PaymentRequestService $paymentRequestService 
    * @return Response
    */
    public function store(StorePaymentRequest $request, PaymentRequestService $paymentRequestService)
    {       
        $paymentRequestService->create($request->user(), $request->all());
        return redirect()->route('payment_requests.index')
        ->with('alert-success', __('messages.payment_request_created'));
    }



    /**
    * Show the form for editing the specified resource.
    *
    * @param  PaymentRequest  $paymentRequest
    * @return Response
    */
    public function edit(PaymentRequest $paymentRequest)
    {
        $users = User::get();
    
        return view('payment_requests.edit', compact('paymentRequest', 'users'));
    }


    /**
    * Update the specified resource in storage.
    *
    * @param UpdatePaymentRequest $request
    * @param  PaymentRequest  $paymentRequest
    * @return Response
    */
    public function update(UpdatePaymentRequest $request, PaymentRequest $paymentRequest)
    {
        (new PaymentRequestService)->update($paymentRequest, $request->all());
        return redirect(route('payment_requests.show', $paymentRequest->id))
        ->with('alert-success', __('messages.payment_request_updated'));
    }


    /**
    * Remove the specified resource from storage.
    *
    * @param  PaymentRequest  $paymentRequest
    * @return Response
    */
    public function destroy(PaymentRequest $paymentRequest)
    {
        $paymentRequest->delete();

        return redirect()->route('payment_requests.index')
        ->with('alert-success', __('messages.payment_request_deleted'));

    }

}
