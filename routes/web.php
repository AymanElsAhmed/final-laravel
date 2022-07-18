<?php
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
    dd();
});

//Route::get("/edit/{index}", [PostController::class,  "edit"]);
//Route::put("/update/{index}", [PostController::class,  "update"]);
//Route::delete("/delete/{index}", [PostController::class,  "destroy"]);
Route::resource('/posts', PostController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/products', ProductController::class)->middleware('auth');
