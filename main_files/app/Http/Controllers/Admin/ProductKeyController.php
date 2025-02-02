<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Key;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductKeyController extends Controller
{
    public function index()
    {
        // Get only products that use keys
        $products = Product::where('uses_keys', true)->get();
        
        // Get all keys with their relationships
        $keys = Key::with(['product', 'variant'])->get();
        
        return view('admin.keys.index', compact('keys', 'products'));
    }

public function getVariants($productId)
{
    $variants = ProductVariant::where('product_id', $productId)->get();

    if ($variants->isEmpty()) {
        return response()->json([]); // Return an empty array if no variants exist
    }

    return response()->json($variants);
}


    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'variant_id' => 'nullable|exists:product_variants,id',
            'key' => 'required|string|unique:product_keys,key'
        ]);

        // Check if product uses keys
        $product = Product::find($request->product_id);
        if (!$product->uses_keys) {
            return redirect()->back()->with('error', 'This product does not use keys');
        }

        Key::create([
            'product_id' => $request->product_id,
            'variant_id' => $request->variant_id,
            'key' => $request->key,
            'is_used' => false
        ]);

        return redirect()->route('admin.keys.index')->with('success', 'Key added successfully');
    }

    public function destroy(Key $key)
    {
        $key->delete();
        return redirect()->route('admin.keys.index')->with('success', 'Key deleted successfully');
    }
}