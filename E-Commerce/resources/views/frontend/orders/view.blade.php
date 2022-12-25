@extends('layouts.front')
@section('title')
    My Orders
@endsection
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-white">Order View
                            <a href="{{url('my-orders')}}" class="btn btn-warning text-white float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Shipping Details</h4>
                                <hr>
                                <label>First Name</label>
                                <div class="border ">{{$orders->fname}}</div>
                                <label>Lirst Name</label>
                                <div class="border ">{{$orders->lname}}</div>
                                <label>Email</label>
                                <div class="border ">{{$orders->email}}</div>
                                <label>Contact No.</label>
                                <div class="border ">{{$orders->phone}}</div>
                                <label>Shipping Address</label>
                                <div class="border ">
                                    {{$orders->address1}}<br>
                                    {{$orders->address2}}<br>
                                    {{$orders->city}}<br>
                                    {{$orders->state}}
                                    {{$orders->country}}
                                </div>
                                <label>Zip Code</label>
                                <div class="border ">{{$orders->pincode}}</div>


                            </div>
                            <div class="col-md-6">
                                <h4>Order Details</h4>
                                <hr>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders->orderitems as $item)
                                        <tr>
                                            <td>
                                                {{$item->products->name}}
                                            </td>
                                            <td>
                                                {{$item->qty}}
                                            </td>
                                            <td>
                                                {{$item->price}}
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/uploads/products/'.$item->products->image)}}" width="50" alt="Product Image">

                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
