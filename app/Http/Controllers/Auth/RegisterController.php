<?php

namespace App\Http\Controllers\Auth;

use App\Model\Store;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/entrar';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
    		'name' => 'required',
            'identification' => 'required|unique:stores',
            'password' => 'required',
            'address_street' => 'required',
            'address_number' => 'required',
            'address_neighborhood' => 'required',
            'address_city' => 'required',
            'address_state' => 'required',
            'address_country' => 'required',
            'address_zip_code' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Store::create([
            'name'                  => $data['name'],
            'identification'        => $data['identification'],
            'password'              => $data['password'],
            'address_street'        => $data['address_street'],
            'address_number'        => $data['address_number'],
            'address_neighborhood'  => $data['address_neighborhood'],
            'address_city'          => $data['address_city'],
            'address_state'         => $data['address_state'],
            'address_country'       => $data['address_country'],
            'address_zip_code'      => $data['address_zip_code'],
        ]);
    }
    
    public function doRegister(Request $request){
  
        $input = $request->all();
        $store = new Store;
        
        $validator = $this->validate($request, $store::$rules);
        
            
        $store->create($input);
        
        return redirect('/entrar');
     
        
      
    }
}
