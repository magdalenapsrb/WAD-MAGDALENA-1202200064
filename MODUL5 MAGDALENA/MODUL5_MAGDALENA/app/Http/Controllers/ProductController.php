<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        $products=Product::orderBy('id')->get();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {   
        $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                    . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);
        $user = User::find(Auth::id());
        
        Product::create([
            'name' => $request -> name,
            'user_id' => $request -> user_id,
            'owner' => $request -> owner,
            'brand' => $request -> brand,
            'purchase_order' => $request -> purchase_order,
            'description' => $request -> description,
            'image' => $imgName,
            'status' => $request -> status,
        ]);

        return redirect('/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        
        return view('product.edit', compact('product')); 
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);

        $imgName = $product->img_path;
        if ($request->img_path) {
            $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                        . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'), $imgName);
        }

        Product::find($id)->update([
                'user_id' => $request->user_id,
                'name' => $request -> nama_mobil,
                'owner' => $request -> pemilik_mobil,
                'brand' => $request -> merk_mobil,
                'purchase_date' => $request -> tanggal_beli,
                'description' => $request -> deskripsi,
                'image' => $imgName,
                'status' => $request -> status,
            ]);

        return redirect('/product');
    }

    public function destroy($id)
    {   

        Product::find($id)->delete();

        return redirect('/product');  
    }

    public function show($id) 
    {
        $Product = Product::find($id);
        return view('product.index', compact('Product')); 
    }
}