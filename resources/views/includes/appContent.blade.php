<main class="contenedor">
  <article id="introduction-section">
      @if ( Auth::user() !== null && Auth::user()->role == 'admin')
      <div class="admin-panel">
        <h3>Create a new category</h3>
        <a href="{{route('admin.category')}}" class="btn-admin"> click here! </a>
        <h3>Create a new Sub-category</h3>
        <a href=" {{ route('admin.subcategory')}}" class="btn-admin"> click here! </a>
        <h3>Create a new Tag</h3>
        <a href="{{ route('admin.tag') }}" class="btn-admin"> click here! </a>
      </div>
      <div class="admin-panel">
        <h3>Add a new Product</h3>
        <a href="{{ route('product.create') }}" class="btn-admin"> Click Here! </a>
        <h3>Add a new Seller</h3>
        <a href="{{ route('seller.create') }}" class="btn-admin"> Click Here! </a>
      </div>
      <div class="admin-panel">
        <h3>Stadistics about the web</h3>
        <a href="#" class="btn-admin"> Click Here! </a>
        <h3>See the last orders</h3>
        <a href="#" class="btn-admin"> Click Here! </a>
      </div>
      <div class="login">
        @guest
          <h3>Welcome Again</h3>
          <h4>Sign In for the best experience</h4>
          <form action=" {{route('login')}}" >
            @csrf
            <button class="btn-login"> Log In </button>
          </form>
  
          <h3>Are new here?</h3>
          <h4>Registrate y comienza a comprar con nosotros</h4>
          <form action=" {{route('register')}}">
            @csrf
            <button class="btn-login"> Register </button>
          </form>
          
        @else
          <h3>Profile</h3>
          <h4>User Name</h4>
          <p> {{ $user->username }} </p>
          <h4>Email</h4>
          <p> {{ $user->email }} </p>
          <hr>
          <h3>Are you finish?</h3>
          <h4>Log Out for the best experience</h4>
          <form action=" {{route('logout')}}" method="POST">
            @csrf
            <button class="btn-login"> Log out </button>
          </form>
        @endguest
      </div>
      @else
      <div class="category-section">
        <h3>Shob By Category</h3>
        <div class = 'container'>
          <div class="category-gallery">
            <div class="photo">
              <img src=" {{ asset('storage/products/assets-intro/goran-ivos-iacpoKgpBAM-unsplash.jpg') }}" alt="">
              <p>Computers</p>
            </div>
            <div class="photo">
              <img src=" {{ asset('storage/products/assets-intro/andrew-mantarro-oh93CN7II1Q-unsplash.jpg') }}" alt="">
              <p>Video Games</p>
            </div>
            <div class="photo">
              <img src=" {{ asset('storage/products/assets-intro/kids-me-germany-Zzgmde4_lYU-unsplash.jpg') }}" alt="">
              <p>Baby</p>
            </div>
            <div class="photo">
              <img src=" {{asset('storage/assets/juegos-galeria-2.png')}}" alt="">
              <p>Toys</p>
            </div>
          </div>
        </div>
        <a href="#">Shop now</a>
      </div>
      <div class="basic-section">
        <h3>Amozonias Basics</h3>
        <img src=" {{asset('storage/products/assets-intro/mikael-cho-ZMIrSYeDEsc-unsplash.jpg')}} " alt="">
        <a href="#">Shop Now</a>
      </div>
      <div class="basic-section">
        <h3>Electronics</h3>
        <img src=" {{asset('storage/assets/tecnologia-galeria-4.png')}} " alt="">
        <a href="#">Shop Now</a>
      </div>
      <div class="login">
        @guest
          <h3>Welcome Again</h3>
          <h4>Sign In for the best experience</h4>
          <form action=" {{route('login')}}" >
            @csrf
            <button class="btn-login"> Log In </button>
          </form>
  
          <h3>Are new here?</h3>
          <h4>Registrate y comienza a comprar con nosotros</h4>
          <form action=" {{route('register')}}">
            @csrf
            <button class="btn-login"> Register </button>
          </form>
          
        @else
          <h3>Profile</h3>
          <h4>User Name</h4>
          <p> {{ $user->username }} </p>
          <h4>Email</h4>
          <p> {{ $user->email }} </p>
          <hr>
          <h3>Are you finish?</h3>
          <h4>Log Out for the best experience</h4>
          <form action=" {{route('logout')}}" method="POST">
            @csrf
            <button class="btn-login"> Log out </button>
          </form>
        @endguest
      </div>
      @endif

      <!--SECONDD ROW-->
      <div class="basic-section">
        <h3>Get Fit at Home</h3>
        <img src=" {{ asset('storage/assets/hogar-galeria-4.png') }}" alt="">
        <a href="#">Shop Now</a>
      </div>
      <div class="basic-section">
        <h3>Beauty and Picks</h3>
        <img src=" {{asset('storage/assets/belleza-galeria-4.png')}} " alt="">
        <a href="#">Shop Now</a>
      </div>
      <div class="basic-section">
        <h3>Fashion and Clothe</h3>
        <img src=" {{asset('storage/assets/ropa-galeria-4.png')}} " alt="">
        <a href="#">Shop Now</a>
      </div>
      <div class="basic-section">
        <h3>Food and More</h3>
        <img src=" {{asset('storage/assets/comida-galeria-4.png')}} " alt="">
        <a href="#">Shop Now</a>
      </div>
    </article>
    <article class="services">
      <div class="text">
        <h2>Discover Amazonias</h2>
        <strong>Our Services</strong>
      </div>
      <div class="card-container">
        <div class="card">
          <div class="icon-container">
            <i class="fas fa-concierge-bell"></i>
          </div>
          <p>24/7 <span>Custom Service</span> </p>
        </div>
        <div class="card">
          <div class="icon-container">
            <i class="fas fa-globe-americas"></i>
          </div>
          <p>24/7 <span>Custom Service</span> </p>
        </div>
        <div class="card">
          <div class="icon-container">
            <i class="fas fa-tags"></i>
          </div>
          <p>24/7 <span>Custom Service</span> </p>
        </div>
        <div class="card">
          <div class="icon-container">
            <i class="fas fa-money-check"></i>
          </div>
          <p>24/7 <span>Custom Service</span> </p>
        </div>
        <div class="card">
          <div class="icon-container">
            <i class="fas fa-box-open"></i>
          </div>
          <p>24/7 <span>Custom Service</span> </p>
        </div>
        <div class="card">
          <div class="icon-container">
            <i class="fas fa-truck"></i>
          </div>
          <p>24/7 Custom Service </p>
        </div>
      </div>
    </article>
    <article class="top-sellers">
      <div class="text">
        <h2>Amazonias Top Sellers</h2>
        <strong>See more!</strong>
      </div>
      <div class="product-container">
        <div class="product-slide fadeleft" >
          <img src=" {{asset('storage/assets/tecnologia-galeria-4.png') }}" alt="">
          <img src=" {{asset('storage/assets/tecnologia-galeria-2.png') }}" alt="">
          <img src=" {{asset('storage/assets/ropa-galeria-3.png') }}" alt="">
          <img src=" {{asset('storage/assets/libros-galeria-4.png') }}" alt="">
          <img src=" {{asset('storage/assets/ropa-galeria-1.png') }}" alt="">
          <img src=" {{asset('storage/assets/libros-galeria-2.png') }}" alt="">
        </div>
        <div class="product-slide faderight">
          <img src=" {{asset('storage/assets/juegos-galeria-1.png')}} " alt="">
          <img src=" {{asset('storage/assets/libros-galeria-1.png')}} " alt="">
          <img src=" {{asset('storage/assets/belleza-galeria-3.png')}} " alt="">
          <img src=" {{asset('storage/assets/comida-galeria-3.png')}} " alt="">
          <img src=" {{asset('storage/assets/belleza-galeria-4.png')}} " alt="">
          <img src=" {{asset('storage/assets/comida-galeria-1.png')}}" alt="">
        </div>
        <a class="prev" onclick="plusSlidesProducts(-1)">&#10094;</a>
        <a class="next" onclick="plusSlidesProducts(1)">&#10095;</a>
      </div>
    </article>
    <article class="top-sellers">
      <div class="text">
        <h2>Best Sellers in Kitchen</h2>
        <strong>See more!</strong>
      </div>
      <div class="product-container">
        <div class="product-slide2 fadeleft" >
          <img src=" {{asset('storage/assets/tecnologia-galeria-1.png')}} " alt="">
          <img src=" {{asset('storage/assets/tecnologia-galeria-3.png')}} " alt="">
          <img src=" {{asset('storage/assets/ropa-galeria-2.png')}} " alt="">
          <img src=" {{asset('storage/assets/libros-galeria-1.png')}} " alt="">
          <img src=" {{asset('storage/assets/ropa-galeria-3.png')}} " alt="">
          <img src=" {{asset('storage/assets/libros-galeria-2.png')}}" alt="">
        </div>
        <div class="product-slide2 faderight">
          <img src=" {{asset('storage/assets/juegos-galeria-1.png')}} " alt="">
          <img src=" {{asset('storage/assets/libros-galeria-1.png')}} " alt="">
          <img src=" {{asset('storage/assets/belleza-galeria-3.png')}}" alt="">
          <img src=" {{asset('storage/assets/comida-galeria-4.png')}} " alt="">
          <img src=" {{asset('storage/assets/belleza-galeria-1.png')}} " alt="">
          <img src=" {{asset('storage/assets/comida-galeria-2.png')}} " alt="">
        </div>
        <a class="prev" onclick="plusSlidesProducts2(-1)">&#10094;</a>
        <a class="next" onclick="plusSlidesProducts2(1)">&#10095;</a>
      </div>
    </article>
  </main>