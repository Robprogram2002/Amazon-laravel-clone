<div class="cart-container">
    <div class="main">
        <h2>My Shopping Cart</h2>
        <a href="#">Delete all the products in the cart</a>
        <hr>
        <div class="list-products">
            @foreach ($orders as $order)
                <div class="cart-product">
                    <div class="image">
                        <img src=" {{route('product.image', ['filename' => $order->product->img_path1])}} ">
                    </div>
                    <div class="info">
                        <h4> {{$order->product->title}} </h4>
                        <span> {{$order->product->seller->name}} </span>
                        @if ($order->product->stuck > 0)
                            <p class="available">Available</p>
                        @else
                            <p class="no-available">This product it's not available in this moment </p>
                        @endif
                        <div class="buttons">
                            <button> 
                                <i class="fas fa-arrow-circle-down" wire:click.self = 'minus({{$order->id}})'></i> 
                                <span> {{$order->amount}} </span>  
                                <i class="fas fa-arrow-circle-up" wire:click.self = 'plus({{$order->id}})'></i> 
                            </button>
                            <a wire:click.self = 'remove({{$order->id}})'>Remove product</a>
                        </div>
                    </div>
                    <div class="price">
                        <p>Product cost: <span>${{$order->product->cost}}  </span> </p>
                        <p>Entities: <span>X {{$order->amount}} </span> </p>
                        <hr>
                        <p> <span> ${{$order->product->cost * $order->amount}} </span> </p>
                    </div>
                </div>
            @endforeach
        </div>
        <h2>Subtotal: ${{$total}} </h2>
    </div>
    <div class="side-bar">
        <div class="header">
            <h3>Subtotal: <span>${{$total}}</span> </h3>
            <button>Make the pay</button>
        </div>
        <div class="other-products">
            <h4>Discover other awesome products!</h4>
        </div>
    </div>
</div>
