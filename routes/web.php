<?php

use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/image', function () {
    return view('image');
});
Route::post('/image', function (Request $request) {
    $imageName = $request->file('image')->getClientOriginalName() . "ayman";
    $path = $request->file('image')->store("public/uploads/$imageName");

    // $request->file('image')->store('public/images' . $imageName);

});

//Route::get("/edit/{index}", [PostController::class,  "edit"]);
//Route::put("/update/{index}", [PostController::class,  "update"]);
//Route::delete("/delete/{index}", [PostController::class,  "destroy"]);
Route::resource('/posts', PostController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/products', ProductController::class)->middleware('auth');
Route::post('/reg', function (Request $request) {
    dd($request);
});
Route::get('/test', function () {
    $users = User::all();
    // dd($users);
    // $user = Auth::user();
    // dd($user);
    return view('test', ['users' => $users]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
