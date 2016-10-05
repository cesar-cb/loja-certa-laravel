<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model {
	
	protected $table = 'customer_phone';


	protected $fillable = [
		'phone',
		'customer_id',
	];
	
	protected $hidden = [
		'id',
		'customer_id',
		'created_at',
		'updated_at'
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	public static $rules = [
		'customer_id' => 'required',
		'phone' => 'required|min:8|max:9'
	];

	// Relationships
	public function costumer() {
		return $this->belongsTo('App\Model\Costumer');
	}

}
