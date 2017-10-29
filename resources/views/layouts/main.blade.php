<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">      
    <link href="{{ asset('bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('themes/css/bootstrappage.css') }}" rel="stylesheet"/>
    
    <!-- global styles -->
    <link href="{{ asset('themes/css/flexslider.css') }}" rel="stylesheet"/>
    <link href="{{ asset('themes/css/main.css') }}" rel="stylesheet"/>

    <!-- scripts -->
    <script src="{{ asset('themes/js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>       
    <script src="{{ asset('themes/js/superfish.js') }}"></script>  
    <script src="{{ asset('themes/js/jquery.scrolltotop.js') }}"></script>
    <!--[if lt IE 9]>     
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="top-bar" class="container">
      <div class="row">
        <div class="span4">
          <form method="POST" class="search_form">
            <input type="text" class="input-block-level search-query" Placeholder="Search Here">
          </form>
        </div>
        <div class="span8">
          <div class="account pull-right">
            <ul class="user-menu">        
              <li><a href="#">My Account</a></li>
              <li><a href="cart.html">Your Cart</a></li>
              <li><a href="checkout.html">Checkout</a></li>         
              <li><a href="register.html">Login</a></li>    
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="wrapper" class="container">
      <section class="navbar main-menu">
        <div class="navbar-inner main-menu">        
          <a href="index.html" class="logo pull-left"><img src="{{ asset('themes/images/logo.png') }}" class="site_logo" alt=""></a>
          <nav id="menu" class="pull-right">
            <ul>
              <li><a href="./products.html">Woman</a>         
                <ul>
                  <li><a href="./products.html">Lacinia nibh</a></li>                 
                  <li><a href="./products.html">Eget molestie</a></li>
                  <li><a href="./products.html">Varius purus</a></li>                 
                </ul>
              </li>                             
              <li><a href="./products.html">Man</a></li>      
              <li><a href="./products.html">Sport</a>
                <ul>                  
                  <li><a href="./products.html">Gifts and Tech</a></li>
                  <li><a href="./products.html">Ties and Hats</a></li>
                  <li><a href="./products.html">Cold Weather</a></li>
                </ul>
              </li>             
              <li><a href="./products.html">Hangbag</a></li>
              <li><a href="./products.html">Best Seller</a></li>
              <li><a href="./products.html">Top Seller</a></li>
            </ul>
          </nav>
        </div>
      </section>
      {{-- content --}}
        @yield('body')
      {{-- end content --}}
      <section id="footer-bar">
        <div class="row">
          <div class="span3">
            <h4>Navigation</h4>
            <ul class="nav">
              <li><a href="./index.html">Homepage</a></li>  
              <li><a href="./about.html">About Us</a></li>
              <li><a href="./contact.html">Contac Us</a></li>
              <li><a href="./cart.html">Your Cart</a></li>
              <li><a href="./register.html">Login</a></li>              
            </ul>         
          </div>
          <div class="span4">
            <h4>My Account</h4>
            <ul class="nav">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Order History</a></li>
              <li><a href="#">Wish List</a></li>
              <li><a href="#">Newsletter</a></li>
            </ul>
          </div>
          <div class="span5">
            <p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
            <br/>
            <span class="social_icons">
              <a class="facebook" href="#">Facebook</a>
              <a class="twitter" href="#">Twitter</a>
              <a class="skype" href="#">Skype</a>
              <a class="vimeo" href="#">Vimeo</a>
            </span>
          </div>          
        </div>  
      </section>
      <section id="copyright">
        <span>Copyright 2013 bootstrappage template  All right reserved.</span>
      </section>
    </div>



  </body>
  <script src="{{ asset('themes/js/common.js') }}"></script>
  <script src="{{ asset('themes/js/jquery.flexslider-min.js') }}"></script>
  <script type="text/javascript">
    $(function() {
      $(document).ready(function() {
        $('.flexslider').flexslider({
          animation: "fade",
          slideshowSpeed: 4000,
          animationSpeed: 600,
          controlNav: false,
          directionNav: true,
          controlsContainer: ".flex-container" // the container that holds the flexslider
        });
      });
    });
  </script>

</html>
