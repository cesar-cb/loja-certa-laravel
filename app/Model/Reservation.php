<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {

	protected $fillable = [
		"customer",
		"product",
		"status",
		"due_date",
		"paid_price"
	];

	protected $dates = [
		"created_at",
		"updated_at"
	];

	public static $rules = [
		"customer" => "required",
		"product" => "required",
		"status" => "required",
		"due_date" => "required",
		"paid_price" => "required"
	];

	// Relationships
	
	public function customer() {
		return $this->hasOne('App\Model\Customer', 'id', 'customer');
	}
	
	public function product() {
		return $this->hasOne('App\Model\Product', 'id', 'product');
	}

}
