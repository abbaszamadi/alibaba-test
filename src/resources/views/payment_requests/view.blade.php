@extends('layouts.dashboard')

@section('content')

<div class="row">
    <!-- left profile info section -->
    <div class="col-lg-12 col-12 order-2 order-lg-1">
      <!-- detail -->
<x-validation-errors ></x-validation-errros>

      <div class="card">
        <div class="card-header">
            <div class="demo-inline-spacing">
                <h3 class="mb-75">جزئیات درخواست پراخت</h3>

             
                @if($paymentRequest->status == 'NOT_CHECKED')
                <form action="{{route('payment_requests.update', $paymentRequest->id)}}" method="post" id="archive-form">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="status" value="CONFIRMED">
                    <button type="submit" class="btn btn-outline-success" id="archive-btn">
                        <i data-feather='archive'></i>
                        <span>تایید</span>
                    </button>
                </form>

                <form action="{{route('payment_requests.update', $paymentRequest->id)}}" method="post" id="archive-form">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="status" value="REJECTED">
                    <button type="submit" class="btn btn-outline-warning" id="archive-btn">
                        <i data-feather='archive'></i>
                        <span>رد</span>
                    </button>
                </form>

             
                <form action="{{route('payment_requests.destroy', $paymentRequest->id)}}" method="post" id="delete-form">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger" id="delete-btn">
                        <i data-feather="trash" class="me-25"></i>
                        <span>حذف</span>
                    </button>
                </form>


                <a href="{{route('payment_requests.edit', $paymentRequest->id)}}" class="btn btn-outline-warning">
                    <i data-feather='edit-2'></i>
                    ویرایش
                </a>

                @endif



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

            @if($paymentRequest->status == 'CONFIRMED')
            <span class="badge bg-success">

            @elseif($paymentRequest->status == 'REJECTED')
            <span class="badge bg-danger">

            @elseif($paymentRequest->status == 'NOT_CHECKED')
            <span class="badge bg-secondary">
            @endif
                {{$paymentRequest->status_title}}
            </span>
          </div>

        </div>
      </div>
      <!--/ detail -->


    </div>

  </div>

@endSection
