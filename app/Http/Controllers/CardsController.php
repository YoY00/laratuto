<?php

namespace App\Http\Controllers;

use App\Notes;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Cards;

class CardsController extends Controller
{
    //

//	public function index()
//	{
//		$cards = DB::table('cards')->get();
//		return view('cards/index', compact('cards'));
//	}


	public function index()
	{
		$cards = Cards::all();
		return view('cards/index', compact('cards'));
	}

//	public function show($id)
//	{
//		$card = Cards::find($id);
//		return view("cards/show", compact('card'));
//
//	}

	public function show(Cards $card)
	{
		return view("cards/show", compact('card'));

	}


}
