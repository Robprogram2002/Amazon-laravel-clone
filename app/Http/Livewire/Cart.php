<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\CartOrder;

class Cart extends Component
{
    public $user;
    public $orders;
    public $total;

    public function mount($user)
    {
        $this->user = $user;
        $this->orders = CartOrder::all()->where('user_id', $user);

        $subtotal = 0;
        foreach ($this->orders as $key => $order) {
            $subtotal = $subtotal + ($order->product->cost * $order->amount);
        }

        $this->total = $subtotal;
    }

    public function plus($order_id)
    {
        $order = CartOrder::findOrFail($order_id);
        $order->amount = $order->amount + 1;
        $order->save();

        $this->orders = CartOrder::all()->where('user_id', $this->user);
        return $this->total();
    }

    public function total()
    {
        $subtotal = 0;
        foreach ($this->orders as $key => $order) {
            $subtotal = $subtotal + ($order->product->cost * $order->amount);
        }

        $this->total = $subtotal;
    }

    public function minus($order_id)
    {
        $order = CartOrder::findOrFail($order_id);
        $order->amount = $order->amount - 1;

        if($order->amount == 0 || $order->amount < 0) {
            $order->delete();
            $this->emit('cart_update');
        }else {
            $order->save();
        }

        $this->orders = CartOrder::all()->where('user_id', $this->user);
        return $this->total();
    }

    public function remove($order_id)
    {
        $order = CartOrder::findOrFail($order_id);
        $order->delete();
        $this->orders = CartOrder::all()->where('user_id', $this->user);
        $this->emit('cart_update');
        return $this->total();
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
