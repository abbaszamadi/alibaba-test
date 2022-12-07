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

            <form class="form form-vertical" action="{{route('payment_requests.store')}}" method="post">
              @csrf
                <div class="row">
                <div class="col-12">
                  <div class="mb-1">
                    <label class="form-label" for="first-name-vertical">مبلغ درخواستی</label>
                    <input
                      type="number"
                      min="0"
                      id="first-name-vertical"
                      class="form-control"
                      name="amount"
                      placeholder="مبلغ درخواستی"
                    />
                  </div>
                </div>
             
                <div class="col-12">
                    
                  <div class="mb-1">
                    <label class="form-label" for="contact-info-vertical">طرف حساب دریافت کننده مبلغ</label>
                    <select name="user_id" id="" class="form-control">
                        <option value="">انتخاب طرف حساب</option>
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>

                 
                  </div>
                </div>
                <div class="col-12">
                  <div class="mb-1">
                    <label class="form-label" for="password-vertical">فایل ضمیمه</label>
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
                  <a href="{{route('payment_requests.index')}}">
                    <button type="reset" class="btn btn-outline-secondary">کنسل</button>

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
                    <form action="{{route('payment_requests.store')}}" method="post" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group">
                            <label for="">مبلغ درخواستی:</label>
                            <input type="number" name="amount" class="form-control" min="0" placeholder="مبلغ">
                        </div>

                        <div class="form-gorup">
                            <label for="">فایل ضمیمه</label>
                            <input type="file" name="appendix_file" >
                        </div>

                        <div class="form-group">
                            <label for="">طرف حساب پرداخت</label>
                            <select name="user_id" id="">
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                  
                                @endforeach
                            </select>
                        </div>

                        <button>submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
