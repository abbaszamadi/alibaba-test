<x-app-layout>
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
</x-app-layout>
