<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\Seller;
use App\Product;

class ProductsBar extends Component
{

    public $products;
    public $products_on_sale;
    public $sellers;
    public $category;
    public $subcategories;

    public function mount($category)
    {
        $this->category = $category;
        $this->products = Product::where('category_id', $this->category->id)->get();
        $this->products_on_sale = $this->products->where('onSale', true);
        $this->sellers = Seller::all();
        $this->subcategories = $category->subcategories;
    }

    public function render()
    {
        return view('livewire.products-bar');
    }
}
