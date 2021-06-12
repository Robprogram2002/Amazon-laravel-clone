<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Product;
use App\Category;
use App\Seller;
use App\ProductTag;

class Products extends Component
{
    use WithFileUploads;

    public $categories;
    public $sellers;
    public $tags;
    public $current_category;

    public $title;
    public $description;
    public $category_id;
    public $subcategory_id;
    public $seller_id;
    public $tag1_id;
    public $tag2_id;
    public $tag3_id;
    public $tag4_id;
    public $cost;
    public $stuck;
    public $onSale = false;
    public $discount = 0.0;
    public $specific1;
    public $specific2;
    public $specific3;
    public $specific4;
    public $img_path1;
    public $img_path2;
    public $img_path3;
    public $img_path4;
    public $img_path5;
    public $img_path6;
    //public $rate;

    public function mount()
    {
        $this->categories = Category::all();
        $this->sellers = Seller::all();
        $this->tags = ProductTag::all();
    }

    public function updated($field) {

        $this->validateOnly($field, [
            'title' => 'required|string|min:5',
            'description' => 'required|string|min:20|max:1000',
            'img_path1' => 'required|image',
            'img_path2' => 'required|image',
            'img_path3' => 'required|image',
            'img_path4' => 'required|image',
            'img_path5' => 'required|image',
            'img_path6' => 'required|image',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'seller_id' => 'required',
            'tag1_id' => 'required',
            'tag2_id' => 'required',
            'tag3_id' => 'required',
            'tag4_id' => 'required',
            'cost' => 'required|integer',
            'stuck' => 'required|integer',
            'specific1' => 'required|string|min:3',
            'specific2' => 'required|string|min:3',
            'specific3' => 'required|string|min:3',
            'specific4' => 'required|string|min:3',
        ]);
    }

    public function currentCategory()
    {
        $this->current_category = Category::find($this->category_id);
    }

    public function saveProduct() {

        $this->validate([
            'title' => 'required|string|min:5',
            'description' => 'required|string|min:20|max:1000',
            'img_path1' => 'required|image',
            'img_path2' => 'required|image',
            'img_path3' => 'required|image',
            'img_path4' => 'required|image',
            'img_path5' => 'required|image',
            'img_path6' => 'required|image',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'seller_id' => 'required',
            'tag1_id' => 'required',
            'tag2_id' => 'required',
            'tag3_id' => 'required',
            'tag4_id' => 'required',
            'cost' => 'required|integer',
            'stuck' => 'required|integer',
            'specific1' => 'required|string|min:3',
            'specific2' => 'required|string|min:3',
            'specific3' => 'required|string|min:3',
            'specific4' => 'required|string|min:3',
        ]);
        
        $image_path_name1 = time().$this->img_path1->getClientOriginalName();
        $this->img_path1->storeAs('products', $image_path_name1);

        $image_path_name2 = time().$this->img_path2->getClientOriginalName();
        $this->img_path2->storeAs('products', $image_path_name2);

        $image_path_name3 = time().$this->img_path3->getClientOriginalName();
        $this->img_path3->storeAs('products', $image_path_name3);

        $image_path_name4 = time().$this->img_path4->getClientOriginalName();
        $this->img_path4->storeAs('products', $image_path_name4);

        $image_path_name5 = time().$this->img_path5->getClientOriginalName();
        $this->img_path5->storeAs('products', $image_path_name5);

        $image_path_name6 = time().$this->img_path6->getClientOriginalName();
        $this->img_path6->storeAs('products', $image_path_name6);


        Product::create([
            'title' => $this->title,
            'description' => $this->description,
            'img_path1' => $image_path_name1,
            'img_path2' => $image_path_name2,
            'img_path3' => $image_path_name3,
            'img_path4' => $image_path_name4,
            'img_path5' => $image_path_name5,
            'img_path6' => $image_path_name6,
            'category_id' => $this->category_id,
            'subcategory_id' => $this->subcategory_id,
            'seller_id' => $this->seller_id,
            'tag1_id' => $this->tag1_id,
            'tag2_id' => $this->tag2_id,
            'tag3_id' => $this->tag3_id,
            'tag4_id' => $this->tag4_id,
            'cost' => $this->cost,
            'stuck' => $this->stuck,
            'onSale' => $this->onSale,
            'discount' => $this->discount,
            'specific1' => $this->specific1,
            'specific2' => $this->specific2,
            'specific3' => $this->specific3,
            'specific4' => $this->specific4,
            'rate' => 0.0,
        ]);

        $this->sellers = Seller::all();
        $this->title = '';
        $this->description = '';
        $this->category_id = '';
        $this->subcategory_id = '';
        $this->seller_id = '';
        $this->cost = '';
        $this->stuck = '';
        
        
        session()->flash('message', 'Product successfully created.');
    }



    public function render()
    {
        return view('livewire.products');
    }
}