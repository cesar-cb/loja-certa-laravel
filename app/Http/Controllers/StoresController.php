<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Store;
use Illuminate\Support\Facades\Auth;



class StoresController extends Controller {

	const MODEL = "App\Model\Store";

	use RESTActions;
    
    public function register(Request $request){
  
        $input = $request->all();
        $store = new Store;
        
        $store->create($input);
        
        return redirect('/entrar');
      
    }

}
