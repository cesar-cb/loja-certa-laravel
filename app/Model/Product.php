<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $fillable = [
	  "name",
	  "description",
	  "price",
	  "original_price",
	  "stock",
	  "barcode",
	  "store",
	  "created_at",
	  "updated_at",
	  "status",
	  "due_time"
	];

	protected $dates = [
		'created_at',
        'updated_at',
        'deleted_at'	
	];
	
	protected $attributes = [
		'status' => 'active'
	];

	public static $rules = [
		   "name" => "required",
		   "description" => "required",
		   "price" => "required",
		   "original_price" => "required",
		   "stock" => "required",
		   "barcode" => "required",
		   "due_time" => "required"
	];

	// Relationships
	public function store() {
		return $this->belongsTo('App\Model\Store', 'store');
	}
	
	public function images() {
		return $this->hasMany('App\Model\Photo');
	}
	
	// Mutators


}
