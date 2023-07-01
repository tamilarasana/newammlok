@extends('seller.layout.app')

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Category
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Physical</li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add Product Variation</h5>
                    <a href="{{ route('product.image', ['product' => $product->id ]) }}" class="pull-right btn btn-primary ml-3">Images <i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="{{ route('edit.product', ['product' => $product]) }}" class="pull-right btn btn-primary">Product <i class="fa fa-pencil" aria-hidden="true"></i></a>
                </div>
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('store.variation', ['product' => $product]) }}" method="POST">
                        @csrf
                        <div class="form">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="category_id">Select Color :</label>
                                    <select multiple class="form-control @error('colors') is-invalid @enderror" id="colors" name="colors[]">
                                        @foreach ($colors as $color)
                                            <option value="{{ $color->id }}">{{ $color->color }}</option>
                                        @endforeach
                                    </select>
                                    @error('colors')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="category_id">Select Size :</label>
                                    <select multiple class="form-control @error('size') is-invalid @enderror" id="colors" name="size[]">
                                        @foreach ($size as $data)
                                            <option value="{{ $data->id }}">{{ $data->size }}</option>
                                        @endforeach
                                    </select>
                                    @error('size')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button class="text-center btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Products Category </h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Colors</th>
                            <th scope="col">Size</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($variations as $key => $variation)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $variation->colors->color }}</td>
                            <td>{{ $variation->sizes->size }}</td>
                            <td>
                                @if ($variation->quantity == null)
                                   NA
                                @else
                                    {{ $variation->quantity }}
                                @endif
                            </td>
                            <td>
                                @if ($variation->status == 1)
                                    Active
                                @else
                                    <span class="text-danger">Retired</span>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#editModal_{{ $variation->id }}">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                                <form action="{{ route('destroy.variation', ['variation' => $variation]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('status.variation', ['status' => $variation->status, 'variation' => $variation]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="{{ $variation->status == 1 ? 'btn btn-primary' : 'btn btn-danger' }}">{{ $variation->status == 1 ? 'Retire' : 'Active' }}</button>
                                </form>
                            </td>
                        </tr>

                        {{-- Edit Modal --}}
                        <div class="modal fade" id="editModal_{{ $variation->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">{{ $variation->colors->color }} - {{ $variation->sizes->size }}</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" action="{{ route('update.variation', ['variation' => $variation]) }}" method="POST">
                                            @csrf
                                        <div class="form">
                                            <div class="form-group">
                                                <label for="validationCustom01" class="mb-1">Quantity :</label>
                                                <input class="form-control @error('quantity') is-invalid @enderror" id="validationCustom01" type="number" name="quantity" value="{{ $variation->quantity }}" required>
                                                @error('quantity')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </tbody>
                    </table>
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
