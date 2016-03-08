<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    //
	public function notes()
	{
		return $this->hasMany(Notes::class);
	}


	public function path()
	{
		return url('cards/'.$this->id);
	}


	public function addNote(Notes $note)
	{
		return $this->notes()->save($note);

	}


}
