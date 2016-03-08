<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Card;

class CardsController extends Controller
{
    //

//	public function index()
//	{
//		$cards = DB::table('card')->get();
//		return view('cards/index', compact('cards'));
//	}


	public function index()
	{
		$cards = Card::all();
		return view('cards/index', compact('cards'));
	}

//	public function show($id)
//	{
//		$card = Cards::find($id);
//		return view("cards/show", compact('card'));
//
//	}

	public function show(Card $card)
	{
		return view("cards/show", compact('card'));

	}


}
