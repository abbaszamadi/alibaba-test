<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PaymentRequests\StorePaymentRequest;
use App\Http\Requests\PaymentRequests\UpdatePaymentRequest;
use App\Models\PaymentRequest;
use App\Services\PaymentRequestService;

class PaymentRequestController extends Controller
{
    
    public function __construct()
    {
        $this->authorizeResource(PaymentRequest::class, 'payment_request');
    }

    public function index()
    {
        $paymentRequests = PaymentRequest::with(['user', 'creator'])->get();
    
        return view('payment_requests.index', compact('paymentRequests'));
    }

    public function create()
    {
        $users = User::get();
        return view('payment_requests.create', compact('users'));
    }


    public function show(PaymentRequest $paymentRequest)
    {
        return view('payment_requests.view', compact('paymentRequest'));
    }



    public function store(StorePaymentRequest $request)
    {       
        (new PaymentRequestService)->create($request->user(), $request->all());

        return redirect()->route('payment_requests.index')->with([
            'result'    => true,
            'message'   => 'درخواست پرداخت با موفقیت ثبت شد'
        ]);
    }


    public function edit(PaymentRequest $paymentRequest)
    {
        $users = User::get();
    
        return view('payment_requests.edit', compact('paymentRequest', 'users'));
    }


    public function update(UpdatePaymentRequest $request, PaymentRequest $paymentRequest)
    {
     
        (new PaymentRequestService)->update($paymentRequest, $request->all());
        return redirect(route('payment_requests.show', $paymentRequest->id))
            ->with([
                'result'    => true,
                'message'   => 'آپدیت با موفقیت انجام شد'
            ]);
    }





    public function destroy(PaymentRequest $paymentRequest)
    {
        $paymentRequest->delete();

        return redirect()->route('payment_requests.index')->with([
            'message'   => 'درخواست با موفقیت حذف شد.'
        ]);

    }

}
