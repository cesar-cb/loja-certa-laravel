@extends('layouts.layout')

@section('content')

    
    <h1>Rotas</h1>
    
    <pre><code class="php">
    $app->group(['prefix' => 'api'], function () use ($app) {
    
        /**
         * Routes for resource store
         */
        $app->get('stores', 'App\Http\Controllers\StoresController@all');
        $app->get('store/{id}', 'App\Http\Controllers\StoresController@get');
        $app->post('store', 'App\Http\Controllers\StoresController@add');
        $app->put('store/{id}', 'App\Http\Controllers\StoresController@put');
        $app->delete('store/{id}', 'App\Http\Controllers\StoresController@remove');
        
        /**
         * Routes for resource product
         */
        $app->get('product', function() {
            return App\Model\Product::with('store', 'images')
                ->where('stock', '>=', '1')
                ->where('status', '=', 'active')
                ->get();
        });
        
        $app->get('product/{id}', function($id) {
            return App\Model\Product::with('store', 'images')->where('id', $id)->get();
        });
        
    
        $app->post('product', 'App\Http\Controllers\ProductsController@add');
        $app->put('product/{id}', 'App\Http\Controllers\ProductsController@put');
        $app->delete('product/{id}', 'App\Http\Controllers\ProductsController@remove');
        
        /**
         * Routes for resource reservation
         */
         
        //  Reserve
        $app->post('reserve', 'App\Http\Controllers\ReservationsController@add');
        
        $app->get('reservation', function() {
            return App\Model\Reservation::with('product', 'customer')->get();
        });
        $app->get('reservation/{id}', 'App\Http\Controllers\ReservationsController@get');
        $app->put('reservation/{id}', 'App\Http\Controllers\ReservationsController@put');
        $app->delete('reservation/{id}', 'App\Http\Controllers\ReservationsController@remove');
        
        /**
         * Routes for resource phone
         */
        $app->get('phone', 'App\Http\Controllers\PhonesController@all');
        $app->get('phone/{id}', 'App\Http\Controllers\PhonesController@get');
        $app->post('phone', 'App\Http\Controllers\PhonesController@add');
        $app->put('phone/{id}', 'App\Http\Controllers\PhonesController@put');
        $app->delete('phone/{id}', 'App\Http\Controllers\PhonesController@remove');
        
        /**
         * Routes for resource customer
         */
        $app->get('customer', function() {
            return App\Model\Customer::with('phones')->get();
        });
        $app->get('customer/{id}', function($id) {
            return App\Model\Customer::with('phones')->where('id', $id)->get();
        });
        $app->post('customer', 'App\Http\Controllers\CustomersController@add');
        $app->put('customer/{id}', 'App\Http\Controllers\CustomersController@put');
        $app->delete('customer/{id}', 'App\Http\Controllers\CustomersController@remove');
        
        /**
         * Routes for resource photo
         */
        $app->get('photo', 'App\Http\Controllers\PhotosController@all');
        $app->get('photo/{id}', 'App\Http\Controllers\PhotosController@get');
        $app->post('photo', 'App\Http\Controllers\PhotosController@add');
        $app->put('photo/{id}', 'App\Http\Controllers\PhotosController@put');
        $app->delete('photo/{id}', 'App\Http\Controllers\PhotosController@remove');

    
    });
    </code></pre>
@endsection