<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Store;



class StoresController extends Controller {

	const MODEL = "App\Model\Store";

	use RESTActions;
	
	public function login(Request $request){
	  
	      $request = $request->only('identification', 'password');
	      
	     // dd(Auth::validate());
	      
	      if (Auth::attempt($request)) {
            return redirect('/home');
        } else {
            return 'nao ta logado';
        }
        
    }
    
    public function register(Request $request){
  
        $input = $request->all();
        $store = new Store;
        
        $store->create($input);
        
        return redirect('/entrar');
      
    }

}
