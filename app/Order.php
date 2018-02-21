<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
		protected $casts = ['item_id' => 'json'];

	    protected $fillable = ['name','lastname','email','address','city','zipcode','phone','item_id','note'];
}
