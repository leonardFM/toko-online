<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Product Page";
        $product = Product::all();
        return view('admin.product.index', compact('title', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Product Page";
        $category = Category::all();
        return view('admin.product.add', compact('title', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_product = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('product_image', $image_product);

        Product::create([
            'category_id' => $request->category_id,
            'name_product' => $request->name_product,
            'image' => $image_product,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $title = "Detail product";
        return view('admin.product.detail', compact('title', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $title = "Edit Product";
        $category = Category::all();
        return view('admin.product.edit', compact('product', 'title', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        if ($request->image != 0) {

            $image_product = $request->file('image')->getClientOriginalName();
            $request->file('image')->move('product_image', $image_product);

            $data = [
                'category_id' => $request->category_id,
                'name_product' => $request->name_product,
                'image' => $image_product,
                'description' => $request->description,
                'price' => $request->price
            ];
        } else {
            $data = [
                'category_id' => $request->category_id,
                'name_product' => $request->name_product,
                'description' => $request->description,
                'price' => $request->price
            ];
        }

        $product->update($data);
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
