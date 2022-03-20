<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Articles;



class Table extends Component
{
	Use WithPagination;

	protected $listeners = ['updateTable' => 'updateTable'];

	public function render()
	{
		return view('livewire.table', [
			'articles' => Articles::orderBy('id','desc')->paginate(5)
		]);
	}

	public function updateTable() {
		$this->render();
	}
}
