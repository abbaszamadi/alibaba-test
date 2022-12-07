@if(session('alert-success'))

<div class="alert alert-success" role="alert">
    <h4 class="alert-heading"></h4>
    <div class="alert-body">
     {{session('alert-success')}}
    </div>
  </div>
@endif


@if(session('alert-danger'))

<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">خطا !</h4>
    <div class="alert-body">
      {{session('alert-danger')}}
    </div>
  </div>
@endif

