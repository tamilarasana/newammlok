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
            <h3>Add Payment
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
                     <h5>Payment</h5>
                </div>
                <div class="card-body">
                    <div class="row product-adding">
                        <div class="col-xl-7">
                            <div class="container">
                                <div class=" main-content-area">
                                        <h3 class="box-title">Payment Method</h3>
                                    <form action="{{ route('payment.type') }}" method="post" >
                                        @csrf
                                        <div class="choose-payment-methods">                        
                                            <label class="payment-method">
                                                <input name="pay_type"  value="cod" type="radio" checked>
                                                <span>Cash On Delivery</span>
                                            </label><br>
                                            <label class="payment-method">
                                                <input name="pay_type" value="card" type="radio" disabled  >
                                                <span style="color: #bebebe;
                                                ">Debit / Credit Card</span>
                                            </label><br>
                                            <label class="payment-method">
                                                <input name="pay_type"  value="paypal" type="radio" disabled>
                                                <span style="color: #bebebe;
                                                ">Paypal</span>
                                            </label>
                                            @error('paymentmode')  <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        @if(Session::has('checkout'))
                                            <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{Session::get('checkout')['total']}}</span></p>                                       
                                        @endif  
                    
                                        @if($errors->isEmpty())
                                            <div wire:ignore id="processing" style="font-size:22px; margin-bottom:20px;padding-left:37px;color:green;display:none;">
                                                <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                                <span>Processing...</span>
                                            </div>
                                        @endif
                    
                                        <button type="submit" class="btn btn-medium">Place order now </button>                    
                                        
                                    </div>
                                    </form>                       
                                </div>
                            </div>
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
