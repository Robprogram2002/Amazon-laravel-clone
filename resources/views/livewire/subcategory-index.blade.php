
<h3>Products on {{$subcategory->name}} </h3>
<div class="list-products">
    @foreach ($subcategory->products as $product)
        @livewire('single-product', ['product' => $product])      
    @endforeach
</div>

