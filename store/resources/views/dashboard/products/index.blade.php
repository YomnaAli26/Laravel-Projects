@extends('layouts.master')
@section("page_header","Products")
@section("page_name")
    @parent
    <li class="breadcrumb-item active">Products</li>
@endsection
@section('content')
    <div class="mb-5" >
        <a href="{{ route('dashboard.products.create') }}" class="btn btn-primary mr-2">Create Product</a>

    </div>
    <x-alert type="success"/>
    <form action="{{URL::current()}}" method="get" class="d-flex justify-content-between mb-4">
        <x-form.input name="name" placeholder="Name" class="mx-2" :value="request('name')"/>
        <x-form.select class="mx-2" name="status" default_option_name="All"
                       :options="['active'=>'Active','archived'=>'Archived']" :selected="request('status')" />
        <button type="submit" class="btn btn-dark mx-2">Filter</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Store</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Image</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
        <tr>
            <td></td>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->store->name }}</td>
            <td>{{ $product->status }}</td>
            <td>{{ $product->created_at }}</td>
            <td><img src="{{ asset('storage/'.$product->image) }}"  height="50" alt=""></td>
            <td>
                <a href="{{ route('dashboard.products.edit',$product->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
            </td>
            <td>
                <form action="{{ route('dashboard.products.destroy',$product->id) }}" method="post">
                   @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="9">No products defined.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $products->withQueryString()->links() }}
@endsection
