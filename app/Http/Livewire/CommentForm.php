<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;
use Livewire\WithFileUploads;

class CommentForm extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $rate = 0;
    public $img_path1;
    public $img_path2;
    public $img_path3;

    public $product;
    public $user_id;
    public $comments;
    public $rating = 0;


    public function mount($product, $user_id)
    {
        $this->product = $product;
        $this->user_id = $user_id;
        $this->comments = $this->product->comments;
        $this->title = '';
        $this->content = '';
        $this->rate = 0;
        $this->img_path1 = null;
        $this->img_path2 = null;
        $this->img_path3 = null;
    }

    public function updated($field) {

        $this->validateOnly($field, [
            'title' => 'required|string|min:3',
            'content' => 'required|string|min:20|max:1000',
            'img_path1' => 'image|nullable',
            'img_path2' => 'image|nullable',
            'img_path3' => 'image|nullable',
            'rate' => 'required'
        ]);
    }


    public function commentSave() {

        $this->validate([
            'title' => 'required|string|min:3',
            'content' => 'required|string|min:20|max:1000',
            'img_path1' => 'image|nullable',
            'img_path2' => 'image|nullable',
            'img_path3' => 'image|nullable',
            'rate' => 'required'
        ]);
        
        if ($this->img_path1 !== null) {
            $image_path_name1 = time().$this->img_path1->getClientOriginalName();
            $this->img_path1->storeAs('comments', $image_path_name1);
        }else {
            $image_path_name1 = null;
        }

        if ($this->img_path2 !== null) {
            $image_path_name2 = time().$this->img_path2->getClientOriginalName();
            $this->img_path2->storeAs('comments', $image_path_name2);
        }else {
            $image_path_name2 = null;
        }

        if ($this->img_path3 !== null) {
            $image_path_name3 = time().$this->img_path3->getClientOriginalName();
            $this->img_path3->storeAs('comments', $image_path_name3);
        }else {
            $image_path_name3 = null;
        }

        Comment::create([
            'title' => $this->title,
            'content' => $this->content,
            'img_path1' => $image_path_name1,
            'img_path2' => $image_path_name2,
            'img_path3' => $image_path_name3,
            'rate' => $this->rate,
            'product_id' => $this->product->id,
            'user_id' => $this->user_id
        ]);

        $this->title = '';
        $this->content = '';
        $this->rate = 0;
        $this->img_path1 = null;
        $this->img_path2 = null;
        $this->img_path3 = null;

        $valor = 0;
        foreach ($this->comments as $key => $comment) {
            $valor = $valor + $comment->rate;
        }

        if($valor !== 0) {
            $this->rating = $valor/ count($this->comments);
        }

        $this->product->rate = $this->rating;
        $this->product->save();

        $this->emitUp('newComment', ['rating' => $this->rating]);

    }

    public function showComment()
    {
        $this->title = '';
        $this->content = '';
        $this->rate = 0;
        $this->img_path1 = null;
        $this->img_path2 = null;
        $this->img_path3 = null;

        $this->emitUp('comment');

    }

    public function render()
    {
        return view('livewire.comment-form');
    }
}
