<?php

namespace App\Http\Livewire;
use App\Models\Articles;

use Livewire\Component;

class Form extends Component
{
	public function render()
	{
		return view('livewire.form');
	}

	public $ID, $name, $description, $categorie, $amount, $price, $type;
	protected $listeners = [
		'editArticle' => 'editArticle',
		'deleteArticle' => 'deleteArticle',
		'confirmDeleteArticle' => 'confirmDeleteArticle',
	];

	protected $rules = [
		'name' => 'required',
		'description' => 'required',
		'categorie' => 'required',
		'amount' => 'required',
		'price' => 'required'
	];

	public function unloadArticle() {
		$this->name = "";
		$this->description = "";
		$this->categorie = "";
		$this->amount = "";
		$this->price = "";
		$this->type = 0;
	}

	public function editArticle($id) {

		$a = Articles::findOrFail($id);
		if(isset($a)) {
			$this->ID = $a->id;
			$this->name = $a->name;
			$this->description = $a->description;
			$this->categorie = $a->categorie;
			$this->amount = $a->amount;
			$this->price = $a->price;
			$this->type = 1;
		}
	}

	public function addArticle() {
		$validate = $this->validate($this->rules);
		if($this->type == 0) {
			Articles::create($validate);
		} else if($this->type == 1) {
			Articles::findOrFail($this->ID)->update($validate);
		} 
		$this->emitTo('table','updateTable');	
		$this->unloadArticle();
	}

	public function confirmDeleteArticle($id) {
		$this->dispatchBrowserEvent('confirm', [
			'name' => Articles::find($id)->name,
			'id' => $id
		]);
	}

	public function deleteArticle($op, $id) {
		if($op) {
			Articles::findOrFail($id)->delete();
			$this->emitTo('table','updateTable');	
		}
	}


	public function updateArticle($id) {
		Articles::findOrFail($id)->update([
			'name' => $this->name,
			'description' => $this->description,
			'categorie' => $this->categorie,
			'amount' => $this->amount,
			'price' => $this->price
		]);

		$this->unloadArticle();
	}
}
