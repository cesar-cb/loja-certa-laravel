<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $fillable = [
    	"email",
    	"password",
    	"first_name",
    	"last_name",
    	"identification"
	];

	protected $dates = [
		"created_at",
		"updated_at"
	];

	public static $rules = [
		"email" => 'required|email',
    	"password" => 'required',
    	"first_name" => 'required',
    	"last_name" => 'required',
    	"identification" => 'required'
	];

	// Relationships
	public function phones() {
		return $this->hasMany('App\Model\Phone');
	}
	
	
	// Mutators
	public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

}