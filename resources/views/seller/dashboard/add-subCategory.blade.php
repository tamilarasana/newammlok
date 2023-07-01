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
                    <h3>Sub Category
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

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Sub Category</h5>
                </div>
                <div class="card-body">
                    <div class="btn-popup pull-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Sub-Category <i class="fa fa-plus" aria-hidden="true"></i></button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Sub Category</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" action="{{ route('sub-category.store') }}" method="POST">
                                            @csrf
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1 @error('sub_category') is-invalid @enderror">Sub Category :</label>
                                                    <input class="form-control" id="validationCustom01" type="text" name="sub_category" value="">
                                                    @error('sub_category')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">Category :</label>
                                                    <select name="category_id" class="form-control">
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label for="category_id">Select Gander :</label>
                                                <select class="form-control @error('gender') is-invalid @enderror" id="category_id" name="gender">
                                                    @foreach($genders as $gender)
                                                    <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('gender')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>

                                                {{-- <div class="form-group mb-0">
                                                    <label for="validationCustom02" class="mb-1">Category Image :</label>
                                                    <input class="form-control" id="validationCustom02" type="file">
                                                </div> --}}
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
                    </div>
                    {{-- <div class="table-responsive">
                        <div id="basicScenario" class="product-physical"></div>
                    </div> --}}
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                            <th scope="col">Sub Category</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subCategories as $subcategory)
                        <tr>
                            <th scope="row">{{ $subcategory->id }}</th>
                            <td>{{ $subcategory->category->category }}</td>
                            <td>{{ $subcategory->sub_category }}</td>
                            <td>{{ $subcategory->genders->name }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#edit_{{ $subcategory->id }}">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                                <form action="{{ route('sub-category.destroy', ['sub_category' => $subcategory]) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                        {{-- Edit Model --}}
                        <div class="modal fade" id="edit_{{ $subcategory->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Sub-Category</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" action="{{ route('sub-category.update', ['sub_category' => $subcategory]) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="PUT">
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1 @error('sub_category') is-invalid @enderror">Sub Category :</label>
                                                    <input class="form-control" id="" type="text" name="sub_category" value="{{ $subcategory->sub_category }}">
                                                    @error('sub_category')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">Category :</label>
                                                    <select name="category_id" class="form-control">
                                                        @foreach($categories as $category)
                                                        <option {{ $subcategory->category_id === $category->id? 'selected' : '' }} value="{{ $category->id }}">{{ $category->category }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                <label for="category_id">Select Gander :</label>
                                                <select class="form-control @error('gender') is-invalid @enderror" id="category_id" name="gender">
                                                    @foreach($genders as $gender)
                                                    <option {{ $subcategory ->gender_id === $gender->id? 'selected' : '' }} value="{{ $gender->id }}">{{ $gender->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('gender')
                                                    <div class="alert alert-danger">{{ $message }}</div>
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
@if (count($errors) > 0)
<script type="text/javascript">
    $( document ).ready(function() {
         $('#exampleModal').modal('show');
    });
</script>
@endif
<!-- Container-fluid Ends-->
@endsection
