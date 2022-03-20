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

	public $name, $description, $categorie, $amount, $price, $type;

	public function unloadArticle() {
		$this->name = "";
		$this->description = "";
		$this->categorie = "";
		$this->amount = 0;
		$this->price = 0.0;
	}

	public function addArticle() {
		Articles::create([
			'name' => $this->name,
			'description' => $this->description,
			'categorie' => $this->categorie,
			'amount' => $this->amount,
			'price' => $this->price
		]);

		$this->resetForm();
	}

	public function deleteArticle($id) {
		Articles::findOrFail($id)->delete();
	}

	public function editArticle($id) {
		Articles::findOrFail($id)->update([
			'name' => $this->name,
			'description' => $this->description,
			'categorie' => $this->categorie,
			'amount' => $this->amount,
			'price' => $this->price
		]);
	}

}
