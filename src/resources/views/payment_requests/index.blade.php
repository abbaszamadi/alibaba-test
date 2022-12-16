@extends('layouts.dashboard')


@section('content')

<div class="row" id="table-head">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">لیست درخواست ها</h4>

          <a class='btn btn-primary' href="{{route('payment_requests.create')}}">
            افزودن درخواست
          </a>
        </div>
        <div class="card-body">
        
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th>مبلغ</th>
                <th>کاربر طرف حساب</th>
                <th>پشتیبان </th>
                <th>وضعیت</th>
                <th>تاریخ درخواست</th>

                <th>گزینه ها</th>
              </tr>
            </thead>
            <tbody>

                @foreach($paymentRequests as $paymentRequest)
                    <tr>
                        <td>
                            {{$paymentRequest->amount}}
                        </td>
                        <td>
                            {{$paymentRequest->user->name}}
                        </td>
                        <td>
                            {{$paymentRequest->creator->name}}
                        </td>
                       
                        <td>
                            <span class="rounded-pill badge badge-light-{{$paymentRequest->status->colorClass()}} me-1">
                            {{$paymentRequest->status->toString()}}
                            </span>
                        </td>
                       
                        <td>
                            {{$paymentRequest->created_at}}
                        </td>

                        <td>
                            <a href="{{route('payment_requests.show', $paymentRequest->id)}}">
                                <button class="btn btn-primary">جزئیات</button>
                            </a>
                        </td>
                    </tr>

                @endforeach
            
            </tbody>
          </table>
        </div>
      
        
      </div>
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

                    <table>
                        <thead>
                            <th>
                                <td>#</td>
                                <td>amount</td>
                                <td>درخواست دهنده</td>
                                <td>طرف حساب</td>
                                <td>گزینه ها</td>
                            </th>
                        </thead>
              
                        <tbody>
                            @foreach($paymentRequests as $paymentRequest)
                            <tr>
                                <td></td>
                                <td>
                                    {{$paymentRequest->amount}}
                                </td>
                                <td>
                                    {{$paymentRequest->creator->name}}
                                </td>
                                <td>
                                    {{$paymentRequest->user->name}}
                                </td>
                                <td>
                                    <a href="{{route('payment_requests.show', $paymentRequest->id)}}">جزئیات</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                        
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
