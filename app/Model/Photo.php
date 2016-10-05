<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
	
	protected $table = 'product_photo';

	protected $fillable = [
		'product_id',
		'path'
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	public static $rules = [
		'product_id' => 'required',
		'path' => 'required'
	];

	// Relationships
	public function product() {
		return $this->belongsTo('App\Model\Product');
	}

}
