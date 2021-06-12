<h3>Products with price between {{$number1}} - {{$number2}} </h3>
<div class="list-products">
    @foreach ($products as $product)
        @livewire('single-product', ['product' => $product])
    @endforeach
</div>
