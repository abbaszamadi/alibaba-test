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
                    <form action="{{route('payment_requests.update', $paymentRequest->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                       
                        <div class="form-group">
                            <label for="">مبلغ درخواستی:</label>
                            <input type="number" value="{{$paymentRequest->amount}}" name="amount" class="form-control" min="0" placeholder="مبلغ">
                        </div>

                        <div class="form-gorup">
                            <label for="">فایل ضمیمه</label>
                            <input type="file" name="appendix_file" >
                        </div>

                        <div class="form-group">
                            <label for="">طرف حساب پرداخت</label>
                            <select name="user_id" id="">
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}" 
                                        {{$paymentRequest->user_id == $user->id ? 'selected' : null}}>{{$user->name}}</option>
                            
                                @endforeach
                            </select>
                        </div>

                        <div>
                            
                        </div>
                        <button>submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
