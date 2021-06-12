<h3>Products offers by {{$seller->name}} </h3>
<div class="list-products">
    @foreach ($products as $product)
        @livewire('single-product', ['product' => $product])
    @endforeach
</div>
