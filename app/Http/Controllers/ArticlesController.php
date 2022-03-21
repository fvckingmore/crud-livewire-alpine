<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

	protected $rules = [
		'name' => 'required',
		'description' => 'required',
		'categorie' => 'required',
		'amount' => 'required',
		'price' => 'required'
	];

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('index', [
			'articles' => Articles::all(),
			'type' => 0
		]);
	}

	public function create() {
		return view('form', [
			'type' => 0
		]);
	}

	public function add(Request $r) {
		$validate = $r->validate($this->rules);

		Articles::create([
			'name' => $r->name,
			'description' => $r->description,
			'categorie' => $r->categorie,
			'amount' => $r->amount,
			'price' => $r->price
		]);

		return redirect('/');
	}

	public function edit($id) {
		return view('form', [
			'a' => Articles::find($id),
			'type' => 1
		]);
	}

	public function update(Request $r) {
	    $validate = $r->validate($this->rules);

	    Articles::findOrFail($r->id)->update([
	        'name' => $r->name,
	        'description' => $r->description,
	        'categorie' => $r->categorie,
	        'amount' => $r->amount,
	        'price' => $r->price
	    ]);

	    return redirect('/');
	}

	public function delete(Request $r) {
		Articles::findOrFail($r->id)->delete();
		return redirect('/');
	}

}
