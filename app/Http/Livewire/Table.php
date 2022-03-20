<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Articles;

class Table extends Component
{
    public function render()
    {
        return view('livewire.table');
    }
}
