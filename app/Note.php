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

	public function user()
	{
		return $this->belongsTo(User::class);
	}
	public function editPath()
	{
		return url('notes/'.$this->id.'/edit');
	}

	public function updatePath()
	{
		return url('notes/'.$this->id);
	}
}
