<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SellerProducts extends Component
{
    public $seller;
    public $products;
    public $category;

    public function mount($category, $seller)
    {
        $this->seller = $seller;
        $this->products = $seller->products->where('category_id', $category->id);
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.seller-products');
    }
}
