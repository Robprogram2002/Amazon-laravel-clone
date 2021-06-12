<div class="product-container">
    <div class="header-section">
        <div class="list-images">
            <img src=" {{route('product.image', ['filename' => $product->img_path1])}} " data-image="one">
            <img src=" {{route('product.image', ['filename' => $product->img_path2])}} " data-image="two">
            <img src=" {{route('product.image', ['filename' => $product->img_path3])}} " data-image="three">
            <img src=" {{route('product.image', ['filename' => $product->img_path4])}} " data-image="four">
            <img src=" {{route('product.image', ['filename' => $product->img_path5])}} " data-image="five">
            <img src=" {{route('product.image', ['filename' => $product->img_path6])}} " data-image="six">
        </div>
        <div class="main-images">
            <img src=" {{route('product.image', ['filename' => $product->img_path1])}} " data-image="one" class="main activo">
            <img src=" {{route('product.image', ['filename' => $product->img_path2])}} " data-image="two" class="main">
            <img src=" {{route('product.image', ['filename' => $product->img_path3])}} " data-image="three" class="main">
            <img src=" {{route('product.image', ['filename' => $product->img_path4])}} " data-image="four" class="main">
            <img src=" {{route('product.image', ['filename' => $product->img_path5])}} " data-image="five" class="main">
            <img src=" {{route('product.image', ['filename' => $product->img_path6])}} " data-image="six" class="main">
        </div>
        <div class="product-info">
            <h3> {{$product->title}} </h3>
            <span class="seller">By {{$product->seller->name}} </span>
            <div class="rate">
                @switch($rating)
                    @case($rating == 0 )
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating > 0.4 && $rating < 1)
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating == 1)
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating > 1 && $rating <= 1.9)
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating == 2 )
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating > 2 && $rating <= 2.9 )
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating == 3 )
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating > 3 && $rating <= 3.9)
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating == 4)
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating > 4 && $rating <= 4.9)
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        @break
                    @case($rating == 5)
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        @break
                    @default
                        
                @endswitch
                <span>  {{$rating}}  -  ({{count($comments)}}) califications</span>
            </div>
            <p> ({{count($questions)}}) question answers  </p>
            <hr>
            <div class="numbers">
                <p style="text-decoration: line-through;">Original Price: ${{$product->cost}} </p>
                <p>Current Price: <span>${{$product->cost - ($product->cost * $product->discount)/100 }}.00 </span> </p>
                <p>Save: <span>${{($product->cost * $product->discount)/100}}.00</span> </p>
            </div>
            <hr>
            <h3>Bref description:</h3>
            <p> {{substr($product->description,0,150)}} ... </p>
            <hr>
            <h4>About this product:</h4>
            <ul class="specifications">
                <li> {{$product->specific1}} </li>
                <li> {{$product->specific2}} </li>
            </ul>
        </div>
        <div class="product-card">
            @if (session()->has('message'))
            <div class="alert-success">
                {{ session('message') }}
            </div>
            @endif
            <span>${{$product->cost - ($product->cost * $product->discount)/100 }}.00</span>
            <h6>Send Free</h6>
            <p>Date of arrive: Agust 11 -16</p>
            @if ($product->stuck > 0)
                <h3>Available</h3>
            @else
                <h3>This product is not available right now</h3>
            @endif
            <button wire:click.prevent = 'addCart'>
                <i class="fas fa-cart-plus"></i>
                <p>Agregar al carrito</p>
            </button>
            <button>
                <i class="fas fa-play-circle"></i>
                <p>Comprar ahora</p>
            </button>
            <br>
            <p>Send from <small> {{$product->seller->country}} - {{$product->seller->state}} </small> </p>
            <p>Sell by <small> {{$product->seller->name}} </small> </p>
            <hr>
            <button wire:click.prevent = 'showWish'>
                <i class="fas fa-heart"></i>
                <p>Add to the Wish List</p>
            </button>
            <div class=" banner">

            </div>
        </div>
    </div>
    @if ($wish_list_toggle)
        @livewire('wish-form', ['user_id' => $user_id, 'product' => $product])
    @endif
    <div class="other-products">
        <h3>Other products selling by {{$product->seller->name}} </h3>
        <div id="productsSale-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="product-container">
                    @foreach ($other_products as $product)
                        @if ($loop->index <= 3)         
                            @livewire('single-product', ['product' => $product])
                        @endif
                    @endforeach
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="product-container">
                    @foreach ($other_products as $product)
                        @if ($loop->index >= 3 && $loop->index <= 6)         
                            @livewire('single-product', ['product' => $product])
                        @endif
                    @endforeach
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#productsSale-carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productsSale-carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr>
    <div class="information-section">
        <h3>Information about the product</h3>
        <h5>Description</h5>
        <p> {{$product->description}} </p>
        <h5>Specifications:</h5>
        <div class="specifications">
            <p> {{$product->specific1}} </p>
            <p> {{$product->specific2}} </p>
            <p> {{$product->specific3}} </p>
            <p> {{$product->specific4}} </p>
        </div>
        <h5>Product tags:</h5>
        <div class="tags">
            <p> {{$tag1->name}} </p>
            <p> {{$tag2->name}} </p>
            <p> {{$tag3->name}} </p>
            <p> {{$tag4->name}} </p>
        </div>
    </div>
    <hr>
    <div class="other-products">
        <h3>Other products in {{$category->title}} </h3>
        <div id="category-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="product-container">
                    @foreach ($category->products as $product)
                        @if ($loop->index <= 3)         
                            @livewire('single-product', ['product' => $product])
                        @endif
                    @endforeach
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="product-container">
                    @foreach ($category->products as $product)
                        @if ($loop->index >= 3 && $loop->index <= 6)         
                            @livewire('single-product', ['product' => $product])             
                        @endif
                    @endforeach
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#category-carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#category-carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr>
    <div class="other-products">
        <h3>Other products in {{$subcategory->name}} </h3>
        <div id="subcategory-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="product-container">
                    @foreach ($subcategory->products as $product)
                        @if ($loop->index <= 3)         
                            @livewire('single-product', ['product' => $product])
                        @endif
                    @endforeach
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="product-container">
                    @foreach ($subcategory->products as $product)
                        @if ($loop->index >= 3 && $loop->index <= 6)         
                            @livewire('single-product', ['product' => $product])
                        @endif
                    @endforeach
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#subcategory-carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#subcategory-carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr>
    <div class="question-section">
        <h3>Questions and answers of customers</h3>
        <div class="input">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Do you have a question? Search an answer (press enter)" wire:keydown.enter="saveQuestion" wire:model = 'new_question'> 
        </div>
        <div class="list-questions">
            @foreach ($questions as $question)
            <div class="question">
                <span>Question:</span>
                <p> {{$question->title}} <br> <small> {{$question->user->username}} - {{ $question->created_at}} ({{$question->created_at->diffForHumans()}})</small> </p>  
                @if ($question->response !== null)
                    <span>Answer:</span>
                    <p class="response"> {{$question->response}} <br> <small> {{$product->seller->name}} {{$question->response_time}} </small> </p>
                @else
                    <i class="fas fa-search"></i>
                    <button>Add a response for this question</button>
                @endif  

            </div>                    
            @endforeach
            <button>
                see more question ( {{count($questions)}} )
            </button>
        </div>
    </div>
    <div class="main-banner">

    </div>
    <hr>
    <div class="comment-section">
        <div class="rate-section">
            <h3>Customer's Opinion and Rate</h3>
            <div class="rate">
                @switch($rating)
                    @case($rating == 0 )
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating > 0.4 && $rating < 1)
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating == 1)
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating > 1 && $rating <= 1.9)
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating == 2 )
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating > 2 && $rating <= 2.9 )
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating == 3 )
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating > 3 && $rating <= 3.9)
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating == 4)
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        @break
                    @case($rating > 4 && $rating <= 4.9)
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        @break
                    @case($rating == 5)
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        @break
                    @default
                        
                @endswitch
                <span> {{$rating}} of 5.0</span>
            </div>
            <small> {{count($comments)}} califications of clients</small>
            <hr>
            <h3>Write a review about this product</h3>
            <p>Share your opinion with other customers</p>

            <button wire:click = "showComment" >
                write my opinion
            </button>
        </div>
        <div class="main-section">
            <h3>Customer's images</h3>
            <div class="images">
                @foreach ($comments as $comment)
                    @if ($loop->index <= 4)
                        @if ($comment->img_path1 !== null)
                            <img src=" {{route('comment.image', ['filename' => $comment->img_path1])}} ">
                        @endif
                        @if ($comment->img_path2 !== null)
                            <img src=" {{route('comment.image', ['filename' => $comment->img_path2])}} ">
                        @endif
                        @if ($comment->img_path3 !== null)
                            <img src=" {{route('comment.image', ['filename' => $comment->img_path3])}} ">
                        @endif
                    @endif
                @endforeach
            </div>
            <a href="">See all the customer's images</a>

            <div class="list-comments">
                <h3>Comments</h3>
                <hr>
                @foreach ($comments as $comment)
                <div class="comment">
                    <div class="user">
                        <i class="fas fa-user-circle"></i>
                        <span> {{$comment->user->username}} </span>
                    </div>
                    <div class="rate">
                        @switch($comment->rate)
                            @case($comment->rate == 0 )
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @break
                            @case($comment->rate > 0.4 && $comment->rate < 1)
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @break
                            @case($comment->rate == 1)
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @break
                            @case($comment->rate > 1 && $comment->rate <= 1.9)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @break
                            @case($comment->rate == 2 )
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @break
                            @case($comment->rate > 2 && $comment->rate <= 2.9 )
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @break
                            @case($comment->rate == 3 )
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @break
                            @case($comment->rate > 3 && $comment->rate <= 3.9)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                @break
                            @case($comment->rate == 4)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                @break
                            @case($comment->rate > 4 && $comment->rate <= 4.9)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                @break
                            @case($comment->rate == 5)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                @break
                            @default
                                
                        @endswitch
                    </div>
                    <span> {{$comment->rate}} </span>
                    <h5> {{$comment->title}} </h5>
                    <p> {{$comment->created_at}} ({{$comment->created_at->diffForHumans()}})</p>
                    <p class="content"> {{$comment->content}} </p>
                    <div class="images">
                        @if ($comment->img_path1 !== null)
                            <img src=" {{route('comment.image', ['filename' => $comment->img_path1])}} ">
                        @endif
                        @if ($comment->img_path2 !== null)
                            <img src=" {{route('comment.image', ['filename' => $comment->img_path2])}} ">
                        @endif
                        @if ($comment->img_path3 !== null)
                            <img src=" {{route('comment.image', ['filename' => $comment->img_path3])}} ">
                        @endif
                    </div>
                </div>
                @endforeach

                <a href="#">See all the coments</a>
            </div>
        </div>
    </div>
    <hr>
    @if ($show)
        @livewire('comment-form', ['product' => $product, 'user_id' => $user_id])
    @endif

    <div class="other-products">
        <h3>Maybe also you like</h3>

        <div id="product-1-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="product-container">
                    @foreach ($products2 as $product)
                        @if ($loop->index <= 3)         
                            @livewire('single-product', ['product' => $product])
                        @endif
                    @endforeach
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="product-container">
                    @foreach ($products2 as $product)
                        @if ($loop->index >= 3 && $loop->index <= 6)         
                            @livewire('single-product', ['product' => $product])
                        @endif
                    @endforeach
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#product-1-carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#product-1-carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

        <br>

        <div id="product-2-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="product-container">
                    @foreach ($products3 as $product)
                        @if ($loop->index <= 3)         
                            @livewire('single-product', ['product' => $product])
                        @endif
                    @endforeach
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="product-container">
                    @foreach ($products3 as $product)
                        @if ($loop->index >= 3 && $loop->index <= 6)         
                            @livewire('single-product', ['product' => $product])
                        @endif
                    @endforeach
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#product-2-carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#product-2-carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>