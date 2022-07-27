<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_vendor', ['except' => [
            'search', 'index', 'show'
        ]]);
    }

    public function search(Request $request)
    {

        // $search = $request['search'];
        // $posts = Post::where('title', 'LIKE', '%' . $search . '%')->with('product')->orwhere('description', 'LIKE', '%' . $search . '%')->with('product')->orwhere('from', 'LIKE', '%' . $search . '%')->with('product')->orwhere('to', 'LIKE', '%' . $search . '%')->with('product')->orwhere('deliver_price', 'LIKE', '%' . $search . '%')->with('product')->get();
        // return view("posts.index", compact('posts'));
    }

    public function index(Request $request)
    {
        $posts = Post::all();
        $get_name = $request['search'];
        if ($request['search']) {
            $search = Post::where('title', 'LIKE', '%' . $get_name . '%')->with('product')->orwhere('description', 'LIKE', '%' . $get_name . '%')->with('product')->orwhere('from', 'LIKE', '%' . $get_name . '%')->with('product')->orwhere('to', 'LIKE', '%' . $get_name . '%')->with('product')->orwhere('deliver_price', 'LIKE', '%' . $get_name . '%')->with('product')->get();

            return view("posts.index", ["posts" => $search]);
        }


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
        // dd($user);
        $products = Product::all()->where('user_id', $user->id);;
        $clients = $user->clients;
        return view("posts.create", ["products" => $products, "clients" => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            "title" => 'required|max:100|string',
            "description" => 'required|max:255|string',
            "from" => 'required|string',
            "to" => 'required|string',
            "deliver_price" => 'required|numeric',
            "product_id" => 'required',
            "client_id" => 'required'
        ]);
        $post = new Post(request()->all());
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->route("posts.index");
    }

    // public function storecomment(Request $request, Post $post)
    // {
    //     dd($post);
    //     $request->validate([
    //         "title" => 'required|max:100|string',
    //         "description" => 'required|max:255|string',
    //         "from" => 'required|string',
    //         "to" => 'required|string',
    //         "deliver_price" => 'required|numeric',
    //         "product_id" => 'required'
    //     ]);
    //     $post = new Post(request()->all());
    //     $post->user_id = Auth::user()->id;
    //     $post->save();
    //     return redirect()->route("posts.index");
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view("posts.show1", ["post" => $post]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, User $user)
    {

        $this->authorize('update', [$post, $user]);
        // dd($user);


        // $products = Product::all()->where('user_id', $user->id);
        $products = Product::all()->where('user_id', $user->id);


        return view('posts.edit', [
            'post' => $post,
            'products' => $products
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
    public function destroy(Post $post, User $user)
    {
        $this->authorize('delete', [$post, $user]);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
