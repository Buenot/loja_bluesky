@section('content')
<header>
    <style>
      #intro {
        background-image: url("../mdb/img/sobre/bannersobre.png");   
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
              <a class="nav-link" fantasy="page" href="/contatos">Contatos</a>
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
        <a class="nav-link" href="/carrinho">
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
        <a class="nav-link" href="/login" dusk="init">
          <span><i class="fa fa-sign-in fa-1x"></i></span>
        </a>
      @endif
      </li>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

   <!-- Background image -->
   <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
        </div>
      </div>
    </div>
    <!-- Background image -->




<!-- Default form login -->
<div style= "background-color:black;" >
<br><br><br>
<div class="text-center p-5 col-5"  style="margin: auto; width: 120rem;background-color:black;">
<form class="text-center border border-light p-5" method="POST" action="/login">
@csrf
    <p class="h4 mb-4" style= "font-size:2.0rem; color:white; font-family:'Roboto Slab', serif;">Login</p>

    <!-- Email -->
    <input type="email" dusk="email" name="email" id="defaultLoginFormEmail" class="form-control mb-4" style= "font-family:'Roboto Slab', serif;" placeholder="E-mail">
      <br>
    <!-- Password -->
    <input type="password" dusk="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4"  style= "font-family:'Roboto Slab', serif;"placeholder="Senha">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" style= "font-family:'Roboto Slab', serif;" for="defaultLoginFormRemember">Deixar-me sempre conectado</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="" style= "font-family:'Roboto Slab', serif;">Esqueceu a senha?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <br><br>
    <button class="btn btn-info btn-block my-4" href="/login" dusk="inii" name="Login" style= "font-family:'Roboto Slab', serif;"type="submit">Login</button>
  </form>
   
  <!-- Register -->
   <p>Não tem uma conta?
   <a class="nav-link"  dusk="log" href="/cadastro" style= "font-family:'Roboto Slab', serif;">Cadastrar</a>
    </p>
</div>
<!-- Default form login -->
@endsection