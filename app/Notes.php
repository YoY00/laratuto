<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    //
	protected $fillable = ['body', 'cards_id'];


	public function card()
	{
		return $this->belongsTo(Cards::class, 'cards_id', 'id', 'cards');
	}
}
