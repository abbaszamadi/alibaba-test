<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PaymentRequests\StorePaymentRequest;
use App\Models\PaymentRequest;
use App\Services\PaymentRequestService;

class PaymentRequestController extends Controller
{
    

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



    public function store(StorePaymentRequest $request)
    {       
        (new PaymentRequestService)->create($request->user(), $request->all());


        return redirect()->route('payment_requests.index')->with([
            'result'    => true,
            'message'   => 'درخواست پرداخت با موفقیت ثبت شد'
        ]);
    }






}
