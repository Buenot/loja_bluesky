<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CarrinhodecompraController;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('index');
});

Route::get('/sobre', function () {
    return view('site.sobre');
});


//Contact
Route::post('/sencontactus',[ContactUsController::class,'store']);
Route::get('/contatos',[ContactUsController::class,'index']); 



//cadastro
Route::get('/cadastro',[Controller::class,'viewCadastro']);
Route::post('/cadastro',[Controller::class,'cadastro']);


//login
Route::get('/', [LoginController::class, 'showLogin']);
Route::get('/', function(){
    return view('index');
});

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);


//Carrinho
Route::get('/carrinho',[CarrinhodecompraController::class,'addShoppingCart']);
Route::post('/removecar',[CarrinhodecompraController::class, 'removeShoppingCart']);
Route::post('/addcard',[CarrinhodecompraController::class , 'addShoppingCart']);

//Compras de produtos
Route::post('/finishbuy',[CarrinhodecompraController::class , 'buyCart']);

//categoria do produto
Route::get('/{type}', [ProductController::class, 'show'])->name('categorys');
