<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Mengambil semua order
    public function index(): OrderResource
    {
        $order = Order::with('products')->get();

        return new OrderResource('Order List', $order);
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $order = Order::create();
        foreach ($request->products as $productData) {
            $product = Product::findOrFail($productData['id']);
            
            // Periksa apakah cukup stok
            if ($product->stock < $productData['quantity']) {
                return response()->json(['error' => 'Stok tidak cukup untuk produk ' . $product->name], 400);
            }

            // Tambahkan relasi ke tabel pivot
            $order->products()->attach($product->id, ['quantity' => $productData['quantity']]);

            // Update stok dan sold
            $product->stock -= $productData['quantity'];
            $product->sold += $productData['quantity'];
            $product->save();
        }
        
        return new OrderResource('Order created', $order);
    }

    public function show(Order $order)
    {
        return new OrderResource('Order Detail', $order->with('products')->get());
    }

    // Menghapus order berdasarkan ID
    public function destroy(Order $order)
    {
        foreach ($order->products as $product) {
            // Update stok dan sold saat order dihapus
            $quantity = $product->pivot->quantity;
            $product->stock += $quantity; // Kembalikan stok
            $product->sold -= $quantity;  // Kurangi sold
            $product->save();
        }

        $order->delete(); // Hapus order
        return new OrderResource('Order deleted successfully', $order);
    }
}
