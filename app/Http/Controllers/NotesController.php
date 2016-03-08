<?php

namespace App\Http\Controllers;

use App\Cards;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notes;
class NotesController extends Controller
{
    //
	public function store(Request $request, Cards $card)
	{
//		$note = new Notes();
//		$note->body = $request->body;
//		$note->cards_id = $card->id;
//		return $note;


//		$note = new Notes();
//		$note->body = $request->body;
//		$card->notes()->save($note);


//		$note = new Notes(['body' => $request->body]);
//		$card->notes()->save($note);


//		$card->notes()->save(
//			new Notes(['body' => $request->body])
//		);


//		$card->notes()->create([
//			'body' => $request->body
//		]);


//		$card->notes()->create($request->all());



		$card->addNote(
			new Notes($request->all())
		);



		return back();
	}


	public function store2(Request $request)
	{
		$note = new Notes($request->all());
		$note->save();

		return back();
	}

//	public function store()
//	{
//		return request()->all();
//	}
}
