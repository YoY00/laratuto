<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Note;
class NotesController extends Controller
{
    //
	public function store(Request $request, Card $card)
	{
//		$note = new Note();
//		$note->body = $request->body;
//		$note->card_id = $card->id;
//		return $note;


//		$note = new Note();
//		$note->body = $request->body;
//		$card->notes()->save($note);


//		$note = new Note(['body' => $request->body]);
//		$card->notes()->save($note);


//		$card->notes()->save(
//			new Note(['body' => $request->body])
//		);


//		$card->notes()->create([
//			'body' => $request->body
//		]);


//		$card->notes()->create($request->all());



		$card->addNote(
			new Note($request->all())
		);



		return back();
	}


	public function store2(Request $request)
	{
		$note = new Note($request->all());
		$note->save();

		return back();
	}

//	public function store()
//	{
//		return request()->all();
//	}
}
