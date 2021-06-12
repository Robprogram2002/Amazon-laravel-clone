<div class="product">
    <img src=" {{route('product.image', ['filename' => $product->img_path1])}}" >
    @if (strlen($product->title) <= 50)
        <h4> 
            <a href=" {{route('product.view', ['category_id' => $product->category->id, 'subcategory_id' => $product->subcategory->id, 'id' => $product->id])}} "> {{$product->title}} </a>
        </h4>
    @else
        <h4> 
            <a href=" {{route('product.view', ['category_id' => $product->category->id,'subcategory_id' => $product->subcategory->id,'id' => $product->id])}} ">{{substr($product->title,0,50)}} ...</a>
        </h4>
    @endif
    <p> {{$product->seller->name}} </p>
    <div class="numbers">
        <span class="cost-original"> ${{$product->cost}} </span>
        <span class="cost-discount"> ${{$product->cost - ($product->cost * $product->discount)/100 }} </span>
    </div>
    <div class="rate">
      @switch($product->rate)
          @case($product->rate == 0 )
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              @break
          @case($product->rate > 0.4 && $product->rate < 1)
              <i class="fas fa-star-half-alt"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              @break
          @case($product->rate == 1)
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              @break
          @case($product->rate> 1 && $product->rate <= 1.9)
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              @break
          @case($product->rate == 2 )
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              @break
          @case($product->rate > 2 && $product->rate <= 2.9 )
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              @break
          @case($product->rate == 3 )
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              @break
          @case($product->rate > 3 && $product->rate <= 3.9)
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <i class="far fa-star"></i>
              @break
          @case($product->rate == 4)
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              @break
          @case($product->rate > 4 && $product->rate <= 4.9)
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              @break
          @case($product->rate == 5)
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              @break
          @default
              
      @endswitch
      <span>  {{$product->rate}}</span>
  </div>
  <small class="comments">comments ({{count($product->comments)}})</small>
</div>   