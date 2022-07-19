<?php

use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/image', function () {
//     return view('image');
// });
// Route::post('/image', function (Request $request) {
//     $imageName = $request->file('image')->getClientOriginalName() . "ayman";
//     $path = $request->file('image')->store("public/uploads/$imageName");

//     // $request->file('image')->store('public/images' . $imageName);

// });

//Route::get("/edit/{index}", [PostController::class,  "edit"]);
//Route::put("/update/{index}", [PostController::class,  "update"]);
//Route::delete("/delete/{index}", [PostController::class,  "destroy"]);

Auth::routes();

// Read -> (all types of users)
// cud -> (only vendors)
// ( only vendor can create or update or delete his post )
Route::resource('/posts', PostController::class);

// crud  (only vendor can make all of crud operation on it)
Route::resource('/products', ProductController::class)->middleware('auth');

// categories routes 
//  All users can only read 
//  Vendor can assign it to his product while creation


Route::get('/home', [HomeController::class, 'index'])->name('home');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/test', function () {
    $users = User::all();
    // dd($users);
    // $user = Auth::user();
    // dd($user);
    return view('test', ['users' => $users]);
});
