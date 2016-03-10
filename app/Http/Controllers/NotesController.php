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


		$note = new Note($request->all());
		$card->addNote($note, 1);
		return back();
	}


	public function store2(Request $request)
	{

		$this->validate($request, [
			'body' => 'required|min:10'
		]);

		$note = new Note($request->all());
		$note->user_id= 1;

		$note->save();

		return back();
	}

//	public function store()
//	{
//		return request()->all();
//	}


	public function edit(Note $note)
	{
		return view('notes/edit', compact('note'));

	}

	public function update(Request $request, Note $note)
	{

		$note->update($request->all());

		return back();
	}
}
