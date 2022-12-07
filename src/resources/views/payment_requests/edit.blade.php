@extends('layouts.dashboard')


@section('content')

<x-validation-errors ></x-validation-errros>

<section id="basic-vertical-layouts">
    <div class="row">
      <div class="col-md-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">ثبت درخواست پرداخت</h4>
          </div>
          <div class="card-body">

            <form class="form form-vertical" action="{{route('payment_requests.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-12">
                  <div class="mb-1">
                    <label class="form-label" for="first-name-vertical">مبلغ درخواستی</label>
                    <input
                      type="number"
                      min="0"
                      class="form-control"
                      name="amount"
                      placeholder="مبلغ درخواستی"
                      value="{{$paymentRequest->amount}}"
                    />
                  </div>
                </div>
             
                <div class="col-12">
                    
                  <div class="mb-1">
                    <label class="form-label" for="contact-info-vertical">طرف حساب دریافت کننده مبلغ</label>
                    <select name="user_id" id="" class="form-control">
                        <option value="">انتخاب طرف حساب</option>
                        @foreach($users as $user)
                        <option value="{{$user->id}}"
                            {{$paymentRequest->user_id == $user->id ? 'selected' : null}}>{{$user->name}}</option>
                        @endforeach
                    </select>

                 
                  </div>
                </div>
                <div class="col-12">
                  <div class="mb-1">
                    <label class="form-label" for="password-vertical">  فایل ضمیمه (حداکثر ۱۰MB)</label>
                    <input
                      type="file"
                      id="password-vertical"
                      class="form-control"
                      name="appendix_file"
                
                    />
                  </div>
                </div>
           

                <div class="col-12">
                  <button type="submit" class="btn btn-primary me-1">ثبت درخواست</button>
                  <a   class="btn btn-outline-secondary" href="{{route('payment_requests.show', $paymentRequest->id)}}">
                    کنسل
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
     
    </div>
  </section>

@endSection
