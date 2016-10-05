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
   Route::get('store', 'StoresController@all');
   Route::get('store/{id}', 'StoresController@get');
   Route::post('store', 'StoresController@add');
   Route::put('store/{id}', 'StoresController@put');
   Route::delete('store/{id}', 'StoresController@remove');
    
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
    

   Route::post('product', 'ProductsController@add');
   Route::put('product/{id}', 'ProductsController@put');
   Route::delete('product/{id}', 'ProductsController@remove');
    
    /**
     * Routes for resource reservation
     */
     
    //  Reserve
   Route::post('reserve', 'ReservationsController@add');
    
   Route::get('reservation', function() {
        return App\Model\Reservation::with('product', 'customer')->get();
    });
   Route::get('reservation/{id}', 'ReservationsController@get');
   Route::put('reservation/{id}', 'ReservationsController@put');
   Route::delete('reservation/{id}', 'ReservationsController@remove');
    
    /**
     * Routes for resource phone
     */
   Route::get('phone', 'PhonesController@all');
   Route::get('phone/{id}', 'PhonesController@get');
   Route::post('phone', 'PhonesController@add');
   Route::put('phone/{id}', 'PhonesController@put');
   Route::delete('phone/{id}', 'PhonesController@remove');
    
    /**
     * Routes for resource customer
     */
   Route::get('customer', function() {
        return App\Model\Customer::with('phones')->get();
    });
   Route::get('customer/{id}', function($id) {
        return App\Model\Customer::with('phones')->where('id', $id)->get();
    });
   Route::post('customer', 'CustomersController@add');
   Route::put('customer/{id}', 'CustomersController@put');
   Route::delete('customer/{id}', 'CustomersController@remove');
    
    /**
     * Routes for resource photo
     */
   Route::get('photo', 'PhotosController@all');
   Route::get('photo/{id}', 'PhotosController@get');
   Route::post('photo', 'PhotosController@add');
   Route::put('photo/{id}', 'PhotosController@put');
   Route::delete('photo/{id}', 'PhotosController@remove');

    
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













