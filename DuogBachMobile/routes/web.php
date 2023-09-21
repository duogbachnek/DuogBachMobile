<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FrontEnd\ShopController;
use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (ProductRepositoryInterface $repository) {
    return view('frontend.index');
    // return $repository->find(1);
});


Route::get('shop/product/{id}', [ShopController::class, 'show']);
Route::post('shop/product/{id}', [ShopController::class, 'postComment']);

// Admin routes

Route::prefix("admin")->group(function () {
    Route::resource("user", UserController::class);
});
