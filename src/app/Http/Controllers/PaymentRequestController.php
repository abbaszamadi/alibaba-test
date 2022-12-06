<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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




}
