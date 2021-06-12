<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SellersDetails extends Component
{

    public $seller;

    public function mount($seller)
    {
        $this->seller = $seller;
    }

    public function render()
    {
        return view('livewire.sellers-details');
    }
}
