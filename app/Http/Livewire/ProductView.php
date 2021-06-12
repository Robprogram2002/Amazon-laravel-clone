<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Http\Livewire\Auth;
use App\Seller;
use App\Product;
use App\ProductTag;
use App\Question;
use App\Comment;
use App\CartOrder;
use App\WishList;

class ProductView extends Component
{
    use WithFileUploads;

    public $wish_list_toggle;

    public $category;
    public $subcategory;
    public $product;
    public $other_products;
    public $products2;
    public $products3;
    public $tag1;
    public $tag2;
    public $tag3;
    public $tag4;
    public $questions;
    public $comments;
    public $rating = 0;
    public $new_question;

    public $show;
    public $user_id;

    public function mount($category, $subcategory, $product, $user)
    {
        $this->category = $category;
        $this->subcategory = $subcategory;
        $this->product = $product;
        $this->other_products = $product->seller->products;
        $this->products2 = Product::all()->take(8);
        $this->products3 = Product::all()->take(8);
        $this->tag1 = ProductTag::findOrFail($product->tag1_id);
        $this->tag2 = ProductTag::findOrFail($product->tag2_id);
        $this->tag3 = ProductTag::findOrFail($product->tag3_id);
        $this->tag4 = ProductTag::findOrFail($product->tag4_id);
        $this->questions = $product->questions;
        $this->comments = $product->comments;
        $this->user_id = $user->id;
        $this->wish_list_toggle = false;
        $this->show = false;

        $valor = 0;
        foreach ($this->comments as $key => $comment) {
            $valor = $valor + $comment->rate;
        }

        if($valor !== 0) {
            $this->rating = $valor/ count($this->comments);
        }

        $product->rate = $this->rating;
        $product->save();
    }

    public function updatedComments($rating) {
        $this->comments = $product->comments;
        $this->rating = $rating;
        $this->product->rate = $this->rating;
        $this->product->save();

        session()->flash('message', 'comment successfully created.');
    }

    public function saveQuestion()
    {
        $this->validate([
            'new_question' => 'required|min:5|max:1000'
        ]);

        Question::create([
            'product_id' => $this->product->id,
            'user_id' => $this->user_id,
            'title' => $this->new_question,
        ]);

        $this->new_question = '';
        if(count($this->questions) == 0 || count($this->questions) <= 3) {
            $this->questions = Question::all()->where('product_id', $this->product->id);
        }else {
            $this->questions = Question::all()->where('product_id', $this->product->id)->orderBy('id', 'desc');
        }

        session()->flash('message', 'question successfully created.');
    }

    public function addCart()
    {
        CartOrder::create([
            'user_id' => $this->user_id,
            'product_id' => $this->product->id,
        ]);

        $this->emit('cart_update');

        return session()->flash('message', 'product successfully added to the cart.');       
    }

    public function showWish()
    {
        if($this->wish_list_toggle) {
            $this->wish_list_toggle = false;
        }else{
            $this->wish_list_toggle = true;
        }
    }

    public function showComment()
    {
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.product-view');
    }
}
