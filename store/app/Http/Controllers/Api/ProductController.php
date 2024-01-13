<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products =  Product::filter($request->query())
            ->with('category:id','store:id,name','tags:id,name')
            ->paginate();
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
          [
              'name'=>['required','string','max:255'],
              'description'=>['nullable','string','max:255'],
              'category_id'=>['required','exists:categories,id'],
              'store_id'=>['required','exists:stores,id'],
              'image'=>['nullable','mimes:jpg,jpeg,png'],
              'status'=>['in:active,archived,draft'],
              'price'=>['required','numeric','min:0'],
              'compare_price'=>['nullable','numeric','gt:price']
          ]);
        $product = Product::create($request->all());
        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
//        return $product->load(['store','category']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Product $product)
    {
        $request->validate(
            [
                'name'=>['sometimes','required','string','max:255'],
                'description'=>['nullable','string','max:255'],
                'category_id'=>['sometimes','required','exists:categories,id'],
                'store_id'=>['sometimes','required','exists:stores,id'],
                'image'=>['nullable','mimes:jpg,jpeg,png'],
                'status'=>['in:active,archived,draft'],
                'price'=>['sometimes','required','numeric','min:0'],
                'compare_price'=>['nullable','numeric','gt:price']
            ]);
        $product->update($request->all());
        return Response::json($product);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return response()->json(['message'=>'Post Deleted Successfully']);
    }
}
