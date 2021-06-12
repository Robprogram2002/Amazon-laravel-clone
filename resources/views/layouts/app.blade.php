<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Amazonias</title>

    <!-- Scripts -->
    <script src="{{ asset('js/appMain.js') }}" defer></script>
    <script
    src="https://kit.fontawesome.com/8c76382a5a.js"
    crossorigin="anonymous"
  ></script>

    <!-- Styles -->
    <link rel="stylesheet" href=" {{asset('css/appStyle.css')}} " />
    @yield('links_css')
    @livewireStyles

</head>
<body>

    @livewire('app-nav', ['user' => Auth::user() ? Auth::user() : null])
    <div class="notices">
        <div class="addres">
          <i class="fas fa-map-marked-alt"></i>
          <!-- <p>Deliver to <span>Mexico</span> </p> -->
          <p>Add an Adress to your Orders!</p>
        </div>
        <div class="top-links">
          <a href="#">Today's Deals</a>
          <a href="#">Customer Services</a>
          <a href="#">Gift Cards</a>
          <a href="#">Registry</a>
          <a href="#">Sell</a>
        </div>
        <div>
          <div class="news">
            <a href="#">Amazonias World and Nature</a>
          </div>
        </div>
    </div>
  
      @yield('header')

      @yield('content_body')
  
      <div class="back-top">
        <a href="#">Back to top</a>
      </div>
  
      <footer>
        <div class="container">
          <div class="column">
            <h3>Get to Know Us</h3>
            <a href="#">Careers</a>
            <a href="#">Investor Relations</a>
            <a href="#">Careers</a>
            <a href="#">Investor Relations</a>
            <a href="#">Careers</a>
            <a href="#">Advertise Your Products</a>
          </div>
          <div class="column">
            <h3>Make Money with Us</h3>
            <a href="#">Careers</a>
            <a href="#">Sell on Amazon Business</a>
            <a href="#">Sell Your Apps on Amazon</a>
            <a href="#">Investor Relations</a>
            <a href="#">Careers</a>
            <a href="#">Advertise Your Products</a>
            <a href="#">See More Make Money with Us</a>
          </div>        
          <div class="column">
            <h3>Amazon Payment Products</h3>
            <a href="#">Investor Relations</a>
            <a href="#">Careers</a>
            <a href="#">Investor Relations</a>
          </div>
          <div class="column">
            <h3>Let Us Help You</h3>
            <a href="#">Investor Relations</a>
            <a href="#">Careers</a>
            <a href="#">Investor Relations</a>
            <a href="#">Manage Your Content and Devices</a>
            <a href="#">Amazon Assistant</a>
            <a href="#">Shipping Rates & Policies</a>
          </div>
        </div>
        <hr>
        <div class="btns-footer">
          <div class="container">
            <div class="logo" id="logo">
              <i class="fab fa-shopify"></i>
              <strong>AMAZONIAS</strong>
            </div>
            <a href="#">English</a>
            <a href="#">$ USD-U.S Dollar</a>
            <a href="#">United State</a>
          </div>    
        </div>
      </footer>
  
      <!-- Scripts de JS -->
      @yield('scripts')
      @livewireScripts
    </body>
</html>





      <!-- 
                        @guest
                            <li class="nav-item">
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

-->