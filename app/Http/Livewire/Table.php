<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Articles;
 


class Table extends Component
{
    Use WithPagination;

    public function render()
    {
        return view('livewire.table', [
            'articles' => Articles::paginate(5)
        ]);
    }

}
