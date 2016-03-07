<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    //
	protected $fillable = ['body'];
	public function card()
	{
		return $this->belongsTo(Cards::class);
	}
}
