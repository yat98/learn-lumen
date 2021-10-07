<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class ExampleController extends Controller
{
	/**
	 * Create a new controller instance.
	 */
	public function __construct()
	{
	}

	public function generateKey()
	{
		return Str::random(32);
	}

	public function fooExample()
	{
		return 'Hello, GET method';
	}

	public function barExample()
	{
		return 'Hello, POST method';
	}

	public function userExample($id)
	{
		return 'User dengan id : ' . $id;
	}
}
