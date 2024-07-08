<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Genealogy extends Component
{
    public $genealogy;

    public function mount()
    {
        $this->genealogy = Category::all();
    }

    public function render()
    {
        return view('livewire.genealogy');
    }
}
