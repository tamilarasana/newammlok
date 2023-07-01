@extends('seller.layout.app')

@section('content')
	<!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Deals of the Day
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row products-admin ratio_asos">
                	@forelse($products as $product)
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="#"><img src="{{ url('../storage/app/public/'.$product->primary_image) }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                </br>
                                    <a href="{{ route('product.detail', ['product' =>$product]) }}">
                                        <h6>{{ $product->title }}</h6>
                                    </a>
                                    <h4>Rs.{{ $product->selling_price }}  <del>  {{ $product->mrp }}</del></h4>
                                </br>
                                <h6 class="">Status :
                                    @if ($product->status == 0)
                                    <span class="text-danger">Retired</span>
                                    @else
                                    Active
                                    @endif
                                </h6>
                                <p><a href="{{ route('edit.product', ['product' => $product]) }}" class="btn btn-secondary">Edit</a></p>
                                    <form action="{{ route('status.product', ['status' => $product->status, 'product' => $product]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn {{ $product->status == 1 ? 'btn-primary' : 'btn-danger' }}">{{ $product->status == 0 ? 'Activate' : 'Retire' }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <h1>No data Available.</h1>
                    @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
@endsection
