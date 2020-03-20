<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use App\Product;
use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function store()
    {
        $products = $this->getUserProducts();
        return view('user.store', ['products' => $products]);
    }

    public function addNewProduct(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $id = Auth::user()->id;
        $rand = 'SHL'.rand(100000, 99999999);
        
        $product = new Product;
        $product->uuid = $rand;
        $product->name = $request->input('product_name');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->owner = $id;

        $newImageName = '';

        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/products');
            $image->move($destinationPath, $name);
            $newImageName .= $name;
        }
        
        $product->image = $newImageName;

        $product->save();

        return redirect('/u/store');
    }

    public function getUserProducts()
    {
        $id = Auth::user()->id;
        $products = DB::select('select * from shpl_products where owner = '.$id);
        return $products;
    }
}
