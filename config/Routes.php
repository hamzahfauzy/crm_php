<?php
use vendor\zframework\Route;
use app\User;


Route::middleware("Auth")->post("/login","IndexController@doLogin");
Route::middleware("Auth")->get("/login","IndexController@login");
Route::middleware("Auth")->get("/logout","IndexController@logout");
Route::get("/","IndexController@login");
// for admin
Route::middleware("Admin")->prefix("/admin")->namespaces("Admin")->group(function(){
	Route::get("/","IndexController@index");
	Route::get("/tentang","IndexController@tentang");

	// Category CRUD
	Route::get("/kategori","KategoriController@index");
	Route::get("/kategori/create","KategoriController@create");
	Route::get("/kategori/edit/{id}","KategoriController@edit");
	Route::post("/kategori/insert","KategoriController@insert");
	Route::post("/kategori/update","KategoriController@update");
	Route::get("/kategori/delete/{id}","KategoriController@delete");

	// Customer CRUD
	Route::get("/customer","CustomerController@index");
	Route::get("/customer/create","CustomerController@create");
	Route::get("/customer/edit/{id}","CustomerController@edit");
	Route::post("/customer/insert","CustomerController@insert");
	Route::post("/customer/update","CustomerController@update");
	Route::get("/customer/delete/{id}","CustomerController@delete");

	// Customer Transactions
	Route::get("/transaksi","TransaksiController@index");
	Route::get("/transaksi/show/{customer_id}","TransaksiController@show");
	Route::get("/transaksi/create","TransaksiController@create");
	Route::get("/transaksi/edit/{id}","TransaksiController@edit");
	Route::post("/transaksi/insert","TransaksiController@insert");
	Route::post("/transaksi/update","TransaksiController@update");
	Route::get("/transaksi/delete/{id}","TransaksiController@delete");

	// Payment CRUD
	Route::get("/payment","PaymentController@index");
	Route::get("/payment/create","PaymentController@create");
	Route::get("/payment/edit/{id}","PaymentController@edit");
	Route::post("/payment/insert","PaymentController@insert");
	Route::post("/payment/update","PaymentController@update");
	Route::get("/payment/delete/{id}","PaymentController@delete");	

	// Product CRUD
	Route::get("/produk","ProdukController@index");
	Route::get("/produk/create","ProdukController@create");
	Route::get("/produk/edit/{id}","ProdukController@edit");
	Route::post("/produk/insert","ProdukController@insert");
	Route::post("/produk/update","ProdukController@update");
	Route::get("/produk/delete/{id}","ProdukController@delete");	

});