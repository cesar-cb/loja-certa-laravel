<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::group(['prefix' => 'api'], function () {
    
    /**
     * Routes for resource store
     */
   Route::get('store', 'App\Http\Controllers\StoresController@all');
   Route::get('store/{id}', 'App\Http\Controllers\StoresController@get');
   Route::post('store', 'App\Http\Controllers\StoresController@add');
   Route::put('store/{id}', 'App\Http\Controllers\StoresController@put');
   Route::delete('store/{id}', 'App\Http\Controllers\StoresController@remove');
    
    /**
     * Routes for resource product
     */
   Route::get('product', function() {
        return App\Model\Product::with('store', 'images')
            ->where('stock', '>=', '1')
            ->where('status', '=', 'active')
            ->get();
    });
    
   Route::get('product/{id}', function($id) {
        return App\Model\Product::with('store', 'images')->where('id', $id)->get();
    });
    

   Route::post('product', 'App\Http\Controllers\ProductsController@add');
   Route::put('product/{id}', 'App\Http\Controllers\ProductsController@put');
   Route::delete('product/{id}', 'App\Http\Controllers\ProductsController@remove');
    
    /**
     * Routes for resource reservation
     */
     
    //  Reserve
   Route::post('reserve', 'App\Http\Controllers\ReservationsController@add');
    
   Route::get('reservation', function() {
        return App\Model\Reservation::with('product', 'customer')->get();
    });
   Route::get('reservation/{id}', 'App\Http\Controllers\ReservationsController@get');
   Route::put('reservation/{id}', 'App\Http\Controllers\ReservationsController@put');
   Route::delete('reservation/{id}', 'App\Http\Controllers\ReservationsController@remove');
    
    /**
     * Routes for resource phone
     */
   Route::get('phone', 'App\Http\Controllers\PhonesController@all');
   Route::get('phone/{id}', 'App\Http\Controllers\PhonesController@get');
   Route::post('phone', 'App\Http\Controllers\PhonesController@add');
   Route::put('phone/{id}', 'App\Http\Controllers\PhonesController@put');
   Route::delete('phone/{id}', 'App\Http\Controllers\PhonesController@remove');
    
    /**
     * Routes for resource customer
     */
   Route::get('customer', function() {
        return App\Model\Customer::with('phones')->get();
    });
   Route::get('customer/{id}', function($id) {
        return App\Model\Customer::with('phones')->where('id', $id)->get();
    });
   Route::post('customer', 'App\Http\Controllers\CustomersController@add');
   Route::put('customer/{id}', 'App\Http\Controllers\CustomersController@put');
   Route::delete('customer/{id}', 'App\Http\Controllers\CustomersController@remove');
    
    /**
     * Routes for resource photo
     */
   Route::get('photo', 'App\Http\Controllers\PhotosController@all');
   Route::get('photo/{id}', 'App\Http\Controllers\PhotosController@get');
   Route::post('photo', 'App\Http\Controllers\PhotosController@add');
   Route::put('photo/{id}', 'App\Http\Controllers\PhotosController@put');
   Route::delete('photo/{id}', 'App\Http\Controllers\PhotosController@remove');

    
});

Route::get('/', function() {
    
    return view('index');
    
});

Route::get('/home', function() {
    
    return view('home');
    
});

Route::get('/entrar', function() {
    return view('store.login');
});


Route::get('/registrar', function() {
    return view('store.register');
});

Route::post('registrar', 'StoresController@register');
Route::post('entrar', 'StoresController@login');













