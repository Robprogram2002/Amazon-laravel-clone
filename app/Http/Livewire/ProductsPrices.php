<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class ProductsPrices extends Component
{
    public $category;
    public $products;
    public $number1;
    public $number2;

    public function mount($category, $number1, $number2)
    {
        $this->category = $category;
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->products = Product::all()->where('category_id', $category->id)->where('cost', '>=',$number1)->where('cost', '<=', $number2);
    }

    public function render()
    {
        return view('livewire.products-prices');
    }
}
