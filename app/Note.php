<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
	protected $fillable = ['body', 'card_id'];


	public function card()
	{
		return $this->belongsTo(Card::class);
	}
}
