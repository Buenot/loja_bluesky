@section('content')
<header>
    <style>
      #intro {
        background-image: url("../mdb/img/Blueskyprodutos.png");   
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
            <!-- Ícones -->
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
        <a class="nav-link" href="/login">
          <span><i class="fa fa-sign-in fa-1x"></i></span>
        </a>
      @endif
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
  </header>
 
<!--Navegação principal-->
<div style= "background-color:black;" >
  <!--Layout principal-->
  <div ><br><br><br></div>
  <main class="" style= "background-color:black;">
    <div class="container col-12" style= "background-color:black;">
      
      <!--Seção: Conteúdo-->

      <section class="text-center">
      <h2 class="mb-3 d-flex align-items-start" style= "font-size:1.8rem; color:white; font-family:'Roboto Slab', serif;">Camisetas Bluesky</h2>



        <!--Card compra- camisetas-->

        <div class="row"style= "background-color:black;">
      @foreach ($products as $product)
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../mdb/img/toucas/{{$product->id}}.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body" style="background-color: rgba(  3, 152, 158 );">
                <h5 class="card-title" style= "color:white;background-color:rgba(  3, 152, 158  ); font-size:1.8rem; font-family: 'Roboto Slab', serif;">{{$product->name_product}}</h5>
                <h6 class="card-title" style= "color:white;background-color:rgba(  3, 152, 158  ); font-size: 1.4rem; font-family: 'Roboto Slab', serif;">{{$product->description}}
                <span class="badge badge-pill primary-color">R$ {{$product->price}}</span>
                </h6>
                <form action="/buy" method="POST">
                @csrf
                <input type="hidden" name="idProduct" value={{$product->id}} />
                <button type="submit" class="btn" style="color:rgba(  3, 152, 158  ); background-color:white; font-size:0.7rem;font-family:'Roboto Slab', serif;">Comprar</button>
                </form>
                <form action="/addcard" method="POST">
      '         @csrf
                <input type="hidden" name="idProduct" value={{$product->id}} />
                <button type="submit" class="btn" style="color:rgba(  3, 152, 158  ); background-color:white; font-size:0.7rem;font-family:'Roboto Slab', serif;">adcionar ao carrinho</a>
                </form>
              </div>
            </div>
          </div>
          @endforeach
        <div ><br><br></div>
        <div>
          <img src="../mdb/img/bannerrodape.png"  class="img-fluid"/> 
        </div>
@endsection