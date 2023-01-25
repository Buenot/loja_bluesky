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
        <a class="nav-link" href="/login">
          <span><i class="fa fa-sign-in fa-1x"></i></span>
        </a>
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

<!-- Card -->
<div style= "background-color:black;" >
<br><br><br>
<div class="card">

  <!-- Corpo do Card  -->
  <div style= "background-color:black;" >
  
  <form method="POST" action="/cadastro" class=" border border-light p-6 col-6"  style="margin: auto; width: 120rem;background-color:black;">
  @csrf  
  <div class="card-body">

    <!-- Cadastro de formulário -->
      <p class="h4 text-center mb-4" style= "font-size:2.0rem; color:white; font-family:'Roboto Slab', serif;">Cadastro</p>

      <!--  nome de entrada-->
      <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="name" id="materialFormCardNameEx" class="form-control">
        <label for="materialFormCardNameEx" class="font-weight-light" style= "font-family:'Roboto Slab', serif;">Nome completo</label>
      </div>

      <!-- email de entrada -->
      <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="email" name="email" id="materialFormCardEmailEx" class="form-control">
        <label for="materialFormCardEmailEx" class="font-weight-light"  style= "font-family:'Roboto Slab', serif;">E-mail</label>
      </div>

      <!-- Confirm email de entrada -->
      
      <div class="md-form">
        <i class="fa fa-exclamation-triangle prefix grey-text"></i>
        <input type="email" name="email_verified_at" id="materialFormCardConfirmEx" class="form-control">
        <label for="materialFormCardConfirmEx" class="font-weight-light" style= "font-family:'Roboto Slab', serif;">Confirmar e-mail</label>
      </div>
      

      <!-- Senha de entrada -->
      <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" name="password" id="materialFormCardPasswordEx" class="form-control">
        <label for="materialFormCardPasswordEx" class="font-weight-light" style= "font-family:'Roboto Slab', serif;">Senha</label>
      </div>

      <div class="text-center py-4 mt-3">
        <button class="btn btn-info btn-block" href="/sobre" dusk="inito" type="submit" style= "font-family:'Roboto Slab', serif; ">Cadastrar</button>
      </div>
    </form>
   <!-- Cadastro de formulário de material -->

  </div>
  <!-- Corpo do cartão --> 
  <div style= "background-color:black;" >
</div>
<!-- Card -->
@endsection