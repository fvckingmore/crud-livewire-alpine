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

	public $name, $description, $categorie, $amount, $price;

	public function reset() {
		$this->name = "";
		$this->description = "";
		$this->categorie = "";
		$this->amount = 0;
		$this->price = 0.0;
	}

	public function add() {
		Articles::create([
			'name' => $this->name,
			'description' => $this->description,
			'categorie' => $this->categorie,
			'amount' => $this->amount,
			'price' => $this->price
		]);
	}

}
