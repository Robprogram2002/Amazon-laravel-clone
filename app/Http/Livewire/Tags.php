<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\ProductTag;

class Tags extends Component
{
    public $name;
    public $tags;

    public function mount($tags)
    {
        $this->tags = $tags;
    }

    public function updated($field) {

        $this->validateOnly($field, [
            'name' => 'required|string|min:3',
        ]);
    }

    public function SaveTag() {

        $this->validate([
            'name' => 'required|string|min:3',
        ]);
        

        ProductTag::create([
            'name' => $this->name,
        ]);

        $this->name= '';
        
        session()->flash('message', 'Sub-category successfully updated.');
        $this->tags = ProductTag::all();
    }

    public function render()
    {
        return view('livewire.tags');
    }
}
