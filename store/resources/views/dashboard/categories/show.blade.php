@extends('layouts.master')
@section("page_header","$category->name")
@section("page_name")
    @parent
    <li class="breadcrumb-item active">{{ $category->name }}</li>
@endsection
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Store</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Image</th>

        </tr>
        </thead>
        <tbody>
        @php
        $products = $category->products()->with('store')->latest()->paginate(1);
        @endphp
        @forelse($category->products()->with('store')->paginate(1) as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->store->name }}</td>
                <td>{{ $product->status }}</td>
                <td>{{ $product->created_at }}</td>
                <td><img src="{{ asset('storage/'.$product->image) }}"  height="50" alt=""></td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No products defined.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $products->withQueryString()->links() }}

@endsection
