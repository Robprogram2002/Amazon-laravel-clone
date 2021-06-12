<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\CartOrder;

class AppNav extends Component
{
    protected $listeners = ['cart_update'];

    public $categories;
    public $orders;
    public $user_id;

    public function mount($user)
    {   
        $this->user_id = $user;
        $this->categories = Category::all();
        if($user !== null) {
            $this->orders = CartOrder::all()->where('user_id', $this->user_id);
        }
    }

    public function cart_update()
    {
        $this->orders = CartOrder::all()->where('user_id', $this->user_id);
    }

    public function render()
    {
        return view('livewire.app-nav');
    }
}
