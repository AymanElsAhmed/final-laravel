<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // FIXME
        return view('posts.index', [
           'posts' => Post::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        
        // dd($user);

        $products = Product::all()->where('user_id', $user->id);

        $post = Post::findOrFail($id);
        return view('posts.edit', [
            'post' => $post,
            'products'=>$products
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response $post
     */
    public function update(Request $request, Post $post)
    {  
        $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'max:255'],
            'from' => ['required', 'max:255'],
            'to' => ['required', 'max:255'],
            'deliver_price' => ['required', 'numeric'],
            'product_id' => ['required', 'numeric'],
        ]);

        $post->update($request->all());

        return redirect()->route("posts.index");


        // $post = Post::findOrFail($index);
        // $post->title=request("title");
        // $post->description=request("description");
        // $post->from=request("from");
        // $post->to=request("to");
        // $post->deliver_price=request("deliver_price");
        // $post->user_id=Auth::user()->id;
        // $post->product_id=request("product_id");

        // $post->save();
        // return redirect()->route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($index)
    {
        Post::findOrFail($index)->delete();

        return redirect()->route('posts.index');

    }
}
