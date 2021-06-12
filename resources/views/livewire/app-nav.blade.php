<nav class="my-menu" id="menu">
    <div class="contenedor btn-container-menu">
      <button id="btn-menu-barras" class="btn-menu-barras">
        <i class="fas fa-bars"></i>
      </button>
      <button id="btn-menu-cerrar" class="btn-menu-cerrar">
        <i class="fas fa-window-close"></i>
      </button>
    </div>
    <div class="contenedor container-links-nav">
      <div class="logo" id="logo">
        <a href=" {{route('home')}} ">
          <i class="fab fa-shopify"></i>
          <strong>AMAZONIAS</strong>
        </a>
      </div>
      <div class="center-nav">
        <div class="btn-deparments" id="btn-deparments">
          <p>All the<span>Departments</span></p>
          <i class="fas fa-caret-down"></i>
        </div>
        <div class="search-container">
          <input id="input-search" type="text" wire:model='search' placeholder="Search...." />
        </div>
        <div class="icon-container" wire:click = 'Searching'>
          <i class="fas fa-search"></i>
        </div>
      </div>
      <div class="links">
        <a href="{{ route('login') }}"> 
          <p>Hello, {{Auth::user() ? Auth::user()->username : 'Sign In' }} <span>Acount & Lists</span></p> 
          <i class="fas fa-caret-down"></i> 
        </a>
        <a href="#"> 
          <p>Reteurns <span>& Orders</span></p>
          <i class="fas fa-caret-down"></i>
        </a>
        @if (Auth::user())
        <a href=" {{ route('cart.show', ['user' => Auth::user()]) }} " > 
          <i class="fas fa-cart-plus"></i>
          <small> {{Auth::user() ? count($orders) : 0}} </small> <span>Cart</span> 
        </a>
        @else 
        <a href=" {{ route('login') }} " > 
          <i class="fas fa-cart-plus"></i>
          <small> {{Auth::user() ? count($orders) : 0}} </small> <span>Cart</span> 
        </a>
        @endif

      </div>
    </div>
    <div class="contenedor contenedor-grid">
      <div class="grid" id="grid">
        <div class="categorias">
          <button class="btn-regresar">
            <i class="fas fa-arrow-left"></i>
            Regresar
          </button>
          <h3 class="subtitulo">Categorias</h3>

          @foreach ($categories as $category)
            <a href=" {{route('show.category', ['id' => $category->id])}} " data-categoria="{{$category->title}}"
            > {{$category->title}} <i class="fas fa-angle-right"></i
            ></a>
          @endforeach
        </div>

        

        <div class="contenedor-subcategorias">
            @foreach ($categories as $category)
            <div
            class="subcategoria {{$loop->first ? 'activo' : ''}} "
            data-categoria="{{$category->title}}"
            >
                <div class="enlaces-subcategorias">
                <button class="btn-regresar">
                    <i class="fas fa-arrow-left"></i> Regresar
                </button>
                <h3 class="subtitulo">{{$category->title}}</h3>
                @foreach ($category->subcategories as $subcategory)
                <a href="#"> {{$subcategory->name}} </a>
                @endforeach
                </div>
                <div class="banner-subcategoria">
                <a href="#">
                    <img src=" {{route('category.img', ['filename' => $category->banner])}}"  />
                </a>
                </div>
                <div class="galeria-subcategoria">
                @foreach ($category->subcategories as $subcategory)
                <a href="#">
                    <img src=" {{route('subcategory', ['file' => $subcategory->img_path])}}"  />
                </a>
                @endforeach
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
</nav>