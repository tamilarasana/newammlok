@extends('seller.layout.app')

@section('content')
<!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Dashboard
                                    {{-- <small>Multikart Admin panel</small> --}}
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            @php
                $count = "";
            @endphp
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('user.productlist') }}" method="GET">
                        {{csrf_field()}}
                        @method('GET')
                        <select  class="form-control-sm" name="status" >
                            <option value="">--Select--</option>
                            <option value=" ">All</option>
                            <option value="Dispatching Soon">Dispatching Soon</option>
                            <option value="In Transit">In Transit</option>
                            <option value="Out for Delivery">Out for Delivery</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Cancelled">Cancelled</option> 
                            <option value="Exchanged">Exchanged</option> 
                        </select>
                        <button type="submit" class="btn-sm btn-primary">Search</button>
                    </form>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">ProductId</th>
                            <th scope="col">CategoryId</th>
                            <th scope="col">Style</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Phone </th>
                            <th scope="col">Address</th>
                            <th scope="col">Status</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $value)
                          <tr>
                            <td>{{ $value->users->name }}</td>
                            <td>{{ $value->products->p_spl_id }}</td>
                            <td>{{ $value->products->category_id }}</td>
                            <td>{{ $value->products->style_name }}</td>
                            <td>{{ $value->color->color }}</td>
                            <td>{{ $value->size->size }}</td>
                            <td>{{ $value->quantity }}</td>
                            <td>{{ $value->users->address[0]['phone']}}</td>
                            <td>{{ $value->users->address[0]['doorno']. ',' .$value->users->address[0]['streetname']. ',' .$value->users->address[0]['landmark']. ',' .$value->users->address[0]['city']. ',' .$value->users->address[0]['district']. ',' .$value->users->address[0]['state']. ',' .$value->users->address[0]['pincode'] }}</td>
                            <td>{{ $value->status }}</td>
 
                        </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
            <!-- Container-fluid Ends-->
@endsection
