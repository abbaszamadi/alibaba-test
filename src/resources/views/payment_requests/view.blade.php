@extends('layouts.dashboard')

@section('content')

<div class="row">
    <!-- left profile info section -->
    <div class="col-lg-12 col-12 order-2 order-lg-1">
      <!-- detail -->
      <div class="card">
        <div class="card-header">
            <div class="demo-inline-spacing">
                <h3 class="mb-75">جزئیات درخواست پراخت</h3>

             

                <form action="{{route('payment_requests.update', $paymentRequest->id)}}" method="post" id="archive-form">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="status" value="1">
                    <button type="button" class="btn btn-outline-success" id="archive-btn">
                        <i data-feather='archive'></i>
                        <span>تایید</span>
                    </button>
                </form>

                <form action="{{route('payment_requests.index')}}" method="post" id="archive-form">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="status" value="2">
                    <button type="button" class="btn btn-outline-warning" id="archive-btn">
                        <i data-feather='archive'></i>
                        <span>رد</span>
                    </button>
                </form>

             


                <a href="{{route('payment_requests.edit', $paymentRequest->id)}}" class="btn btn-outline-warning">
                    <i data-feather='edit-2'></i>
                    ویرایش
                </a>

                <form action="{{route('payment_requests.destroy', $paymentRequest->id)}}" method="post" id="delete-form">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-outline-danger" id="delete-btn">
                        <i data-feather="trash" class="me-25"></i>
                        <span>حذف</span>
                    </button>
                </form>

            </div>

        </div>
        <div class="card-body">
         
          <div class="mt-2">
            <h5 class="mb-75">مبلغ درخواستی:</h5>
            <p class="card-text">{{$paymentRequest->amount}}</p>
          </div>
          <div class="mt-2">
            <h5 class="mb-75">کاربر طرف حساب:</h5>
            <p class="card-text">
                {{$paymentRequest->user->name}}
            </p>
          </div>
          <div class="mt-2">
            <h5 class="mb-75">پشتیبان</h5>
            <p class="card-text">
                {{$paymentRequest->creator->name}}
            </p>
          </div>
          <div class="mt-2">
            <h5 class="mb-50">تاریخ درخواست:</h5>
            <p class="card-text mb-0">
                {{$paymentRequest->created_at}}
            </p>
          </div>

          <div class="mt-2">
            <h5 class="mb-50">وضیعت درخواست:</h5>
            <p class="card-text mb-0"></p>
          </div>

        </div>
      </div>
      <!--/ detail -->


    </div>

  </div>

@endSection

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <p>
                        مبلغ:
                    </p>

                    <p>{{$paymentRequest->amount}}</p>

                    <p>درخواست دهنده</p>
                    <p>{{$paymentRequest->user->name}}</p>

                    <p>ایجاد کننده</p>
                    <p>{{$paymentRequest->creator->name}}</p>



                    <p></p>
<hr>

                    <form action="{{route('payment_requests.update', $paymentRequest->id)}}" method="post">
                        @csrf
                        @method('PATCH')

                        <input type="hidden" name="status" value="1">
                        <button type="submit">
                           تایید کردن
                        </button>
                    </form>

                    <form action="{{route('payment_requests.update', $paymentRequest->id)}}" method="post">
                        @csrf
                        @method('PATCH')

                        <input type="hidden" name="status" value="2">
                        <button type="submit">
                            رد کردن 
                        </button>
                    </form>



                    <form action="{{route('payment_requests.destroy', $paymentRequest->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">
                            حذف کردن 
                        </button>
                    </form>


                


                <a style="color: rgb(255, 81, 0)" href="{{route('payment_requests.edit', $paymentRequest->id)}}">sdویرایش</a>
                    
	
</object>

                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
