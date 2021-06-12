<div class="slide-bar">
    <h3>Search products by</h3>
    <div class="side-bar-section">
        <h4> Subcategories </h4>
        @foreach ($subcategories as $subcategory)
            <a href=" {{route('show.subcategory', ['category_id' => $subcategory->category->id, 'id' => $subcategory->id])}} "> {{$subcategory->name}} </a>
        @endforeach
    </div>
    <div class="side-bar-section">
        <h4>Rates</h4>
        <a href="#"> 
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i> 
        </a>
        <a href="#">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </a>
        <a href="#">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </a>
        <a href="#">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </a>
        <a href="#">
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </a>
    </div>
    <div class="side-bar-section">
        <h4>Price</h4>
        <a href=" {{route('products.price', ['category_id' => $category->id, 'number1' => 0.1, 'number2' => 10])}} ">$0.1 to 10$</a>
        <a href=" {{route('products.price', ['category_id' => $category->id, 'number1' => 10, 'number2' => 100])}} ">$10 to $100</a>
        <a href=" {{route('products.price', ['category_id' => $category->id, 'number1' => 100, 'number2' => 500])}} ">$100 to $500</a>
        <a href=" {{route('products.price', ['category_id' => $category->id, 'number1' => 500, 'number2' => 1000])}} ">$500 to $1000</a>
        <a href=" {{route('products.price', ['category_id' => $category->id, 'number1' => 1000, 'number2' => 10000000])}} ">$1000 more ...</a>
    </div>
    <div class="side-bar-section">
        <h4>Sellers</h4>
        @foreach ($sellers as $seller)
            <a href=" {{route('product.seller', ['category_id' => $category->id, 'id' => $seller->id])}} "> {{$seller->name}} </a>
        @endforeach
    </div>
 {{-- Care about people's approval and you will be their prisoner. --}}
</div>
