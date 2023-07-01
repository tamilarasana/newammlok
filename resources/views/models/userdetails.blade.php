@extends('seller.layout.app')

@section('content')
@if (session()->has('success'))
    @component('components.notify-msg', ['class' => 'bg-success'])
      @slot('message')
        {{ session('success') }}
      @endslot
    @endcomponent
  @endif
<!-- Container-fluid starts-->
<div class="container-fluid">
<div class="page-header">
<div class="row">
    <div class="col-lg-6">
        <div class="page-header-left">
            <h3>Add Address
                <small>Multikart Admin panel</small>
            </h3>
        </div>
    </div>
    <div class="col-lg-6">
        <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Physical</li>
            <li class="breadcrumb-item active">Add Address</li>
        </ol>
    </div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Add Address</h5>
</div>
<div class="card-body">
<div class="row product-adding">
<div class="col-xl-7">
    {{-- @php
        dd( $field);
    @endphp --}}
      <form action="{{ route('store.address') }}" method="POST" class="add-product-form" enctype="multipart/form-data">
{{-- <form action="{{ route('store.address') }}" method="POST" class="add-product-form" enctype="multipart/form-data"> --}}
    @csrf
    <div class="form">
          <div class="form-group mb-3 row">
            <label for="title" class="col-xl-3 col-sm-4 mb-0">Door/Flat No :</label>
            <input class="form-control @error('doorno') is-invalid @enderror col-xl-8 col-sm-7" id="title" type="text"  name="doorno"    value=" " required>
                @error('doorno')
                    <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="style_name" class="col-xl-3 col-sm-4 mb-0">Street Name :</label>
            <input class="form-control @error('style_name') is-invalid @enderror col-xl-8 col-sm-7 " id="style_name" type="text" name="streetname"  required>
                    @error('style_name')
                        <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="department" class="col-xl-3 col-sm-4 mb-0 ">Landmark:</label>
            <input class="form-control col-xl-8 col-sm-7" id="department" type="text" name="landmark"   required>
        </div>
        <div class="form-group mb-3 row">
            <label for="pattern" class="col-xl-3 col-sm-4 mb-0">City:</label>
            <input class="form-control @error('pattern') is-invalid @enderror col-xl-8 col-sm-7" id="pattern" type="text" name="city"  required>
                    @error('pattern')
                        <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="rise_style" class="col-xl-3 col-sm-4 mb-0">District:</label>
            <input class="form-control col-xl-8 col-sm-7" id="rise_style" type="text" name="district"  required>
        </div>
        <div class="form-group mb-3 row">
            <label for="fitting_type" class="col-xl-3 col-sm-4 mb-0">State:</label>
            <input class="form-control col-xl-8 col-sm-7" id="fitting_type" type="text" name="state"  required>
        </div>
        <div class="form-group mb-3 row">
            <label for="fitting_type" class="col-xl-3 col-sm-4 mb-0">Phone Number:</label>
            <input class="form-control col-xl-8 col-sm-7" id="fitting_type" type="number" name="phone" required>
        </div>
        <div class="form-group mb-3 row">
            <label for="fabric_type" class="col-xl-3 col-sm-4 mb-0">Pincode:</label>
            <input class="form-control col-xl-8 col-sm-7" id="fabric_type" type="text" name="pincode"  required>
        </div>

      
    </div>
    <div class="offset-xl-3 offset-sm-4">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ url('/') }}" class="btn btn-light">Discard</a>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="{{ asset('seller/js/jquery-3.3.1.min.js') }}"></script>
<script>
$(".notification").animate({right: '40px'});
          setTimeout(function(){
          $('.notification').slideUp(1000)}, 2500);
</script>
<!-- Container-fluid Ends-->



@endsection
