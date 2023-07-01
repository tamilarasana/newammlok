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
            <h3>Add Products
                <small>Multikart Admin panel</small>
            </h3>
        </div>
    </div>
    <div class="col-lg-6">
        <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Physical</li>
            <li class="breadcrumb-item active">Add Product</li>
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
<h5>Add Productss</h5>
</div>
<div class="card-body">
<div class="row product-adding">
<div class="col-xl-7">
<form action="{{  route('store.product') }}" method="POST" class="add-product-form" enctype="multipart/form-data">
    @csrf
    <div class="form">
        <div class="form-group row">
            <label for="category_id" class="col-xl-3 col-sm-4 mb-0"> Category :</label>
            <select class="form-control @error('category_id') is-invalid @enderror digits col-xl-8 col-sm-7" id="category_id" name="category_id">
                <option disabled selected>Select Category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
                @error('category_id')
                    <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group row">
            <label for="subCategory_id" class="col-xl-3 col-sm-4 mb-0">Sub-Category :</label>
            <select class="form-control @error('sub_category_id') is-invalid @enderror digits col-xl-8 col-sm-7" id="subCategory_id" name="sub_category_id">
                <option disabled selected>Select Sub-Category</option>
                @foreach($subCategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->sub_category }}
                </option>
                @endforeach
            </select>
                @error('sub_category_id')
                    <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group row">
            <label for="subCategory_id" class="col-xl-3 col-sm-4 mb-0">Gender :</label>
            <select class="form-control @error('gender_id') is-invalid @enderror digits col-xl-8 col-sm-7" id="gender_id" name="gender_id">
                <option disabled selected>Select Gender</option>
                @foreach($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                @endforeach
            </select>
                @error('gender_id')
                    <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="title" class="col-xl-3 col-sm-4 mb-0">Product Name :</label>
            <input class="form-control @error('title') is-invalid @enderror col-xl-8 col-sm-7" id="title" type="text" name="title">
                @error('title')
                    <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                @enderror
        </div>
         <div class="form-group mb-3 row">
            <label for="title" class="col-xl-3 col-sm-4 mb-0">Product ID :</label>
            <input class="form-control @error('p_spl_id') is-invalid @enderror col-xl-8 col-sm-7" id="p_spl_id" type="text" name="p_spl_id">
                @error('title')
                    <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group mb-3 row">
            <label class="col-xl-3 col-sm-4" for="inputGroupFile02">Primary Image</label>
            <div class="col-xl-8 col-sm-7 pl-0 custom-file">
                <input type="file" class="form-control @error('primary_image') is-invalid @enderror" id="inputGroupFile02" name="primary_image">
            </div>
                @error('primary_image')
                    <div class="col-md-6 offset-md-3 -danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="brand_name" class="col-xl-3 col-sm-4 mb-0">Brand Name :</label>
            <select class="form-control @error('brand_name') is-invalid @enderror digits col-xl-8 col-sm-7" id="brand_name" name="brand_name">
                <option disabled selected>Select Brand</option>
                    @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->brand }}
                    </option>
                    @endforeach
            </select>
                @error('brand_name')
                    <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="style_name" class="col-xl-3 col-sm-4 mb-0">Style Name :</label>
            <input class="form-control @error('style_name') is-invalid @enderror col-xl-8 col-sm-7 " id="style_name" type="text" name="style_name">
                    @error('style_name')
                        <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="department" class="col-xl-3 col-sm-4 mb-0 ">Department:</label>
            <input class="form-control col-xl-8 col-sm-7" id="department" type="text" name="department">
        </div>
        <div class="form-group mb-3 row">
            <label for="pattern" class="col-xl-3 col-sm-4 mb-0">Pattern:</label>
            <input class="form-control @error('pattern') is-invalid @enderror col-xl-8 col-sm-7" id="pattern" type="text" name="pattern">
                    @error('pattern')
                        <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="rise_style" class="col-xl-3 col-sm-4 mb-0">Rise Style:</label>
            <input class="form-control col-xl-8 col-sm-7" id="rise_style" type="text" name="rise_style">
        </div>
        <div class="form-group mb-3 row">
            <label for="fitting_type" class="col-xl-3 col-sm-4 mb-0">Fitting Type:</label>
            <input class="form-control col-xl-8 col-sm-7" id="fitting_type" type="text" name="fitting_type">
        </div>
        <div class="form-group mb-3 row">
            <label for="fabric_type" class="col-xl-3 col-sm-4 mb-0">Fabric Type:</label>
            <input class="form-control col-xl-8 col-sm-7" id="fabric_type" type="text" name="fabric_type">
        </div>
        <div class="form-group mb-3 row">
            <label for="origin_country" class="col-xl-3 col-sm-4 mb-0">Country of Origin:</label>
            <input class="form-control @error('origin_country') is-invalid @enderror col-xl-8 col-sm-7" id="origin_country" type="text" name="origin_country">
                    @error('origin_country')
                        <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                    @enderror
        </div>

        <div class="form-group mb-3 row">
            <label for="mrp" class="col-xl-3 col-sm-4 mb-0">MRP:</label>
            <input class="form-control @error('mrp') is-invalid @enderror col-xl-8 col-sm-7" id="mrp" type="text" name="mrp">
                    @error('mrp')
                        <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="selling_price" class="col-xl-3 col-sm-4 mb-0">Selling Price:</label>
            <input class="form-control @error('selling_price') is-invalid @enderror col-xl-8 col-sm-7" id="selling_price" type="text" name="selling_price">
                    @error('selling_price')
                        <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group mb-3 row">
            <label for="order_quantity" class="col-xl-3 col-sm-4 mb-0">Max Order Quantity:</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
            <div class="input-group">
            <input class="touchspin" id="order_quantity" type="text" name="order_quantity" value="1">
            </div>
            </fieldset>
        </div>
        <div class="form-group mb-3 row">
            <label for="pocket_count" class="col-xl-3 col-sm-4 mb-0">Number of Pockets:</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
            <div class="input-group">
            <input class="touchspin" id="pocket_count" type="text" name="pocket_count" value="1">
            </div>
        </fieldset>
        </div>
        <div class="form-group mb-3 row">
            <label for="unit_count" class="col-xl-3 col-sm-4 mb-0">Unit Count:</label>
            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
                <div class="input-group">
                <input class="touchspin" id="unit_count" type="text" name="unit_count" value="1">
                </div>
            </fieldset>

        </div>
        <div class="form-group mb-3 row">
            <label for="manufacturer" class="col-xl-3 col-sm-4 mb-0">Manufacturer:</label>
            <input class="form-control @error('manufacturer') is-invalid @enderror col-xl-8 col-sm-7" id="manufacturer" type="text" name="manufacturer">
                    @error('manufacturer')
                        <div class="col-md-6 offset-md-3 text-danger">{{ $message }}</div>
                    @enderror
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Product Care Instructions :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" name="care_instructions" class="form-control" cols="92" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Occasion Instructions :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control" name="occasion_instructions" cols="92" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Material Composition :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control" name="material_composition" cols="92" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Item Length Description :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control" name="item_length_desc" cols="92" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Product Description :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control @error('product_desc') is-invalid @enderror" name="product_desc" cols="92" rows="4"></textarea>
                    @error('product_desc')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-xl-3 col-sm-4">Key Features :</label>
            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                <textarea id="" class="form-control" name="key_feature" cols="92" rows="4"></textarea>
            </div>
        </div>

        <div class="form-group row">
        <label class="col-xl-3 col-sm-4">Best Sellers :</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="best_seller" id="inlineRadio1" value="1">
              <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="best_seller" id="inlineRadio2" value="0">
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
        </div>

        <div class="form-group row">
        <label class="col-xl-3 col-sm-4">New Arrivals :</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="new_arrivals" id="inlineRadio1" value="1">
              <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="new_arrivals" id="inlineRadio2" value="0">
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
        </div>

        <div class="form-group row">
        <label class="col-xl-3 col-sm-4">Deals of the Day :</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="deals" id="inlineRadio1" value="1">
              <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="deals" id="inlineRadio2" value="0">
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
        </div>

        <div class="form-group row">
        <label class="col-xl-3 col-sm-4">Men Feature :</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="men_feature" id="inlineRadio1" value="1">
              <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="men_feature" id="inlineRadio2" value="0">
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
        </div>

        <div class="form-group row">
        <label class="col-xl-3 col-sm-4">Women Feature :</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="women_feature" id="inlineRadio1" value="1">
              <label class="form-check-label" for="inlineRadio1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="women_feature" id="inlineRadio2" value="0">
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
        </div>


    </div>
    <div class="offset-xl-3 offset-sm-4">
        <button type="submit" class="btn btn-primary">Next</button>
        <button type="button" class="btn btn-light">Discard</button>
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
