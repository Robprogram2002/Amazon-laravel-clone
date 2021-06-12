<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Categories extends Component
{
    use WithFileUploads;

    public $categories;
    public $title;
    public $description;
    public $img_path;

    public function mount($categories) {
        $this->categories = $categories;
    }

    public function updated($field) {

        $this->validateOnly($field, [
            'title' => 'required|string|min:5',
            'description' => 'required|string|min:20|max:300',
            'img_path' => 'required|image'
        ]);
    }

    public function saveCategory() {

        $this->validate([
            'title' => 'required|string|min:5',
            'description' => 'required|string|min:20|max:300',
            'img_path' => 'required|image'
        ]);
        
        $image_path_name = time().$this->img_path->getClientOriginalName();

        $this->img_path->storeAs('categories', $image_path_name);

        Category::create([
            'title' => $this->title,
            'description' => $this->description,
            'banner' => $image_path_name
        ]);

        $this->categories = Category::all();
        $this->title= '';
        $this->description = '';
        $this->img_path = '';
        
        session()->flash('message', 'Post successfully updated.');
    }

    public function render()
    {
        return view('livewire.categories');
    }
}
