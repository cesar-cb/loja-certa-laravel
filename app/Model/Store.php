<?php namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;




class Store extends Authenticatable {
	
	use Notifiable;
	
	protected $fillable = [
	  "name",
	  "identification",
	  "password",
	  "address_street",
	  "address_number",
	  "address_neighborhood",
	  "address_city",
	  "address_state",
	  "address_country",
	  "address_zip_code"
	];

	protected $dates = [
		'created_at',
        'updated_at'
    ];
    
	public static $rules = [
		'name' => 'required',
        'identification' => 'required',
        'password' => 'required',
        'address_street' => 'required',
        'address_number' => 'required',
        'address_neighborhood' => 'required',
        'address_city' => 'required',
        'address_state' => 'required',
        'address_country' => 'required',
        'address_zip_code' => 'required'
	];

	// Relationships
	public function products() {
		return $this->belongsTo('App\Model\Product');
	}
	
	
	// Mutators
	public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

}
