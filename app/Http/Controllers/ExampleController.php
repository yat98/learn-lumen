<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ExampleController extends Controller
{
	/**
	 * Create a new controller instance.
	 */
	public function __construct()
	{
		$this->middleware('age', ['only' => ['barExample', 'fooExample']]);
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

	public function fooBar(Request $request)
	{
		if ($request->is('foo/bar')) {
			return 'Success';
		}

		return 'Fail';

		return $request->path();
	}

	public function userProfile(Request $request)
	{
		// return $request->all();

		// if ($request->has(['name', 'email'])) {
		if ($request->filled(['name', 'email'])) {
			return 'Success';
		}

		return $request->only(['username', 'password']);
	}
}
