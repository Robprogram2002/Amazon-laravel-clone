<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\WishList;

class WishForm extends Component
{   
    use WithFileUploads;

    public $wish_lists;
    public $list_name;
    public $list_description;
    public $list_image;
    public $user_id;
    public $product;

    public function mount($user_id, $product)
    {
        $this->wish_lists = WishList::all()->where('user_id', $this->user_id);
        $this->user_id = $user_id;
        $this->product = $product;
        $this->list_image = null;
    }

    public function addWish($product_id, $list_id) {

    }

    public function createList()
    {
        $this->validate([
            'list_name' => 'required|string|min:3',
            'list_description' => 'min:10||nullable',
            'list_image' => 'image|nullable'
        ]);

        if ($this->list_image != null) {
            $image_path_name_list = time().$this->list_image->getClientOriginalName();
            $this->list_image->storeAs('wish_lists', $image_path_name_list);
        }else {
            $image_path_name_list = null;
        }

        WishList::create([
            'user_id' => $this->user_id,
            'name' => $this->list_name,
            'description' => $this->list_description,
            'img_path' => $image_path_name_list
        ]);

        $this->list_name = '';
        $this->list_description = '';
        $this->list_image = null;

        $this->wish_lists = WishList::all()->where('user_id', $this->user_id);
        session()->flash('message', 'list successfully created.');
    }

    public function showWish()
    {
        $this->list_name = '';
        $this->list_description = '';
        $this->list_image = null;
        $this->emitUp('wish');
    }

    public function toLists()
    {
        return \redirect()->route('wish.show', ['user' => $this->user_id]);
    }

    public function render()
    {
        return view('livewire.wish-form');
    }
}
