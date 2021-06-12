<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubcategoryIndex extends Component
{
    public $subcategory;

    public function mount($subcategory)
    {
        $this->subcategory = $subcategory;
    }

    public function render()
    {
        return view('livewire.subcategory-index');
    }
}
