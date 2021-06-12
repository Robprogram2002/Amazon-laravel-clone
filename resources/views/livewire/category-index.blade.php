
<div class="header">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src=" {{asset('storage/banners/ramon-salinero-vEE00Hx5d0Q-unsplash.jpg')}} " class="d-block w-100" >
                <div class="carousel-caption d-none d-md-block">
                    <h4>Discover the best products in technology</h4>
                    <p>News monitors and news components at the best price!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src=" {{asset('storage/banners/ramon-salinero-vEE00Hx5d0Q-unsplash.jpg')}} " class="d-block w-100" >
                <div class="carousel-caption d-none d-md-block">
                    <h4>Discover the best products in technology</h4>
                    <p>News monitors and news components at the best price!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src=" {{asset('storage/banners/ramon-salinero-vEE00Hx5d0Q-unsplash.jpg')}} " class="d-block w-100" >
                <div class="carousel-caption d-none d-md-block">
                    <h4>Discover the best products in technology</h4>
                    <p>News monitors and news components at the best price!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src=" {{asset('storage/banners/ramon-salinero-vEE00Hx5d0Q-unsplash.jpg')}} " class="d-block w-100" >
                <div class="carousel-caption d-none d-md-block">
                    <h4>Discover the best products in technology</h4>
                    <p>News monitors and news components at the best price!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<h3>Look or sections!</h3>
<hr>
<div class="subcategories-section">
    @foreach ($subcategories as $subcategory)
        <div class="subcategory">
            <a href=" {{route('show.subcategory', ['category_id' => $subcategory->category->id, 'id' => $subcategory->id])}} ">
                <img src=" {{route('subcategory', ['file' => $subcategory->img_path])}}"  />
                <h4> {{$subcategory->name}} </h4>
            </a>
        </div>
    @endforeach
</div>
<hr>
<div class="banner">
        <i class="fas fa-lightbulb"></i>
        <i class="fas fa-lightbulb"></i>
        <i class="fas fa-lightbulb"></i>
        <div class="text">
            <h3>All for your smart home</h3>
            <h4>Discover or section about technology on home</h4>
            <p>Go ahead now!</p>
        </div>
</div>
<h3>Products on Sales</h3>
<hr>
<div class="products_sales">
    <div id="productsSale-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="product-container">
                    @foreach ($products_on_sale as $product)
                        @if ($loop->index <= 3)         
                            @livewire('single-product', ['product' => $product])
                        @endif
                    @endforeach
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="product-container">
                    @foreach ($products_on_sale as $product)
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
<h3>List of Products for this category</h3>
<div class="list-products">
        @foreach ($products as $product)
            @livewire('single-product', ['product' => $product])
        @endforeach

</div>

