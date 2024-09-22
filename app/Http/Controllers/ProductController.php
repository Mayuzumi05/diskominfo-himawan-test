<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Mengambil semua produk
    public function index(): ProductResource
    {
        $product = Product::all();

        return new ProductResource('Product List', $product);
    }

    // Menyimpan produk baru
    public function store(ProductRequest $request): ProductResource
    {
        $data = $request->validated();

        $product = new Product($data);
        $product->sold = 0;
        $product->save();
        
        return new ProductResource('Product created successfully', $product);
    }

    // Mengambil produk berdasarkan ID
    public function show(Product $product)
    {
        return new ProductResource('Product Detail', $product);
    }

    // Mengupdate produk berdasarkan ID
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());

        return new ProductResource('Product updated successfully', $product);
    }

    // Menghapus produk berdasarkan ID
    public function destroy(Product $product)
    {
        $product->delete();

        return new ProductResource('Product deleted successfully', $product);
    }
}
