@section('menu')
  <!--Navegação principal-->
   <header>
    <style>
      #intro {
        background-image: url("../mdb/img/homeBluesky.png");   
        height: 40vh;
        width: 100;
      }

      /* Altura para dispositivos maiores que 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #ffffff !important;
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
       <!-- Marca Navbar -->
        <a class="navbar-brand nav-link" target="_blank">
          <strong>Bluesky</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link"  fantasy="page" href="/">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" fantasy="page" href="/sobre">Sobre</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" fantasy="page"  href="/contatos">Contatos</a>
            </li>
          </ul>

          <ul class="navbar-nav d-flex flex-row">
            <!-- Icones -->
            <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="https://www.instagram.com/blueskyc1/">
          <span><i class="fab fa-instagram fa-1x"></i></span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="/carrinho" >
          <span><i class="fas fa-shopping-cart fa-1x"></i></span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
      @if ($message = Session::get('username'))
      <li class="nav-item active">
              <a class="nav-link"  fantasy="page" href="/logout">{{$message}}</a>
            </li>
     @endif
     @if (!Session::get('username'))
        <a class="nav-link" dusk="init" href="/login" >
          <span><i class="fa fa-sign-in fa-1x"> Login</i></span>
        </a>
      @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
@endsection