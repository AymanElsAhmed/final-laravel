<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{

    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // if ($user->role === 'delivery') {
        //     // return redirect()->route('/');
        //     abort(403);
        //     // return view('home');
        // }
        // where('user_id', $user->id)->get();
        $products = Product::all()->where('user_id', $user->id);
        // dd($products);

        return view('products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $auth = Auth::user();

        return view('products.create', [
            'user' => $auth
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());

        $product = new Product(request()->all());
        $product->user_id = Auth::user()->id;
        $product->save();
        // $user = new User();
        // dd($request);
        // $user->product()->create([$request]);
        // $product->name = $request->get('name');
        // $product->price = $request->get('price');
        // $product->weight = $request->get('weight');
        // $product->quantity = $request->get('quantity');
        // $product->user_id = Auth::user()->id;
        // $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(Product $product, Request $request)
    {
        $validatedProduct = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'price' => ['required', 'numeric'],
            'weight' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
        ]);

        $product->update($validatedProduct);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect()->route('products.index');
    }
}
