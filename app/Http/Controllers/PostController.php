<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;

class PostController extends Controller
{
    public function search(Request $request)
    {
        $search = $request['search'];
        $posts = Post::where('title', 'LIKE', '%' . $search . '%')->with('product')->orwhere('description', 'LIKE', '%' . $search . '%')->with('product')->orwhere('from', 'LIKE', '%' . $search . '%')->with('product')->orwhere('to', 'LIKE', '%' . $search . '%')->with('product')->orwhere('deliver_price', 'LIKE', '%' . $search . '%')->with('product')->get();
        return view("posts.index", compact('posts'));
    }

    public function index(Request $request)
    {
        $posts = Post::all();
        return view("posts.index", ["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $user = Auth::user();
        $product = Product::all()->where('user_id', $user->id);;
        return view("posts.create", ["products" => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => 'required|max:100|string',
            "description" => 'required|max:255|string',
            "from" => 'required|string',
            "to" => 'required|string',
            "deliver_price" => 'required|numeric',
            "product_id" => 'required'
        ]);
        $post = new Post(request()->all());
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {


        return view("posts.show", ["data" => $post]);
    }



    public function edit($index)
    {
        $post = Post::findOrFail($index);
        return view("edit", ["data" => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($index)
    {

        $post = Post::findOrFail($index);
        $post->title = request("title");
        $post->description = request("description");
        $post->from = request("from");
        $post->to = request("to");
        $post->deliver_price = request("deliver_price");
        $post->user_id = Auth::user()->id;
        $post->product_id = request("product_id");

        $post->save();
        return redirect("homepage");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($index)
    {
        $post = Post::findOrFail($index);
        $post->delete();

        return redirect("/homepage");
    }
}
