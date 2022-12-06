<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PaymentRequests\StorePaymentRequest;

class PaymentRequestController extends Controller
{
    

    public function index()
    {

    }

    public function create()
    {
        $users = User::get();
        return view('payment_requests.create', compact('users'));
    }



    public function store(StorePaymentRequest $request)
    {
        $data = $this->uploadFile($request->all());
       
        $request->user()->payment_requests()->create($data);

        return redirect()->route('payment_requests.index')->with([
            'result'    => true,
            'message'   => 'درخواست پرداخت با موفقیت ثبت شد'
        ]);
    }




    private function uploadFile($data)
    {
        $data['appendix_file'] = Storage::putFile('payment_requests', $data['appendix_file']);
        
        return $data;
    }

}
