<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Model\Product;

use App\Http\Requests;
use \App\Http\Controllers\Controller;


class ProductsController extends Controller
{
    protected $redirectTo = '/home';


    public function index(Request $request) {
        
        $products = api('/api/product', 'GET');
        
        
        return view('store.products.index', ['products' => $products]);
        
    }
    
    public function create() {
        
        return view('store.products.create');
        
    }
    
    public function store(Request $request) {
        
        $input = $request->all();
        
        $product = new Product();
        
        $validator = $this->validate($request, $product::$rules);
        
        $product->create($input);
        
        return redirect('/dashboard')->with('message', 'Produto criado com sucesso');
        
        
    }
    
    public function destroy($id) {
        
        $product = new Product();
        
        $product->find($id)->delete();
        
        return redirect('/dashboard')->with('message', 'Produto deletado');
    }
    
      public function edit($id) {
          
        $product = api('/api/product/' . $id , 'GET');
        
        
        return view('store.products.edit', ['product' => $product]);
    }
    
    
    public function update(Request $request, $id) {
        
        $product = new Product();
        
        $validator = $this->validate($request, $product::$rules);
        
        $product->find($id)->update($request->all());
        
        
        return redirect('/dashboard')->with('message', 'Produto alterado');
    }
}
