<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\SubCategory;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Subcategories extends Component
{

    use WithFileUploads;

    public $categories;
    public $sub_categories;

    public $name;
    public $img_path;
    public $category_id;

    public function mount($sub_categories, $categories) {
        $this->categories = $categories;
        $this->sub_categories = $sub_categories;
    }

    public function updated($field) {

        $this->validateOnly($field, [
            'name' => 'required|string|min:5',
            'img_path' => 'required|image',
            'category_id' => 'required',
        ]);
    }

    public function SaveSubCategory() {

        $this->validate([
            'name' => 'required|string|min:5',
            'img_path' => 'required|image',
            'category_id' => 'required',
        ]);
        
        $image_path_name = time().$this->img_path->getClientOriginalName();

        $this->img_path->storeAs('subcategories', $image_path_name);

        SubCategory::create([
            'name' => $this->name,
            'img_path' => $image_path_name,
            'category_id' => $this->category_id,
        ]);

        $this->name= '';
        $this->img_path;
        $this->category_id = '';
        
        session()->flash('message', 'Sub-category successfully updated.');
        $this->sub_categories = SubCategory::all();
    }

    public function render()
    {
        return view('livewire.subcategories');
    }
}
