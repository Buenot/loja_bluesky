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


    <!-- Contato de formulário padrão -->
    <div style= "background-color:black;" >
  <!--Layout principal-->
  <div ><br><br><br></div>

<form method="POST" action="/sencontactus" class="text-center border border-light p-6 col-6"  style="margin: auto; width: 120rem;background-color:black;">
  @csrf     
  <br>
    <p class="h4 mb-4" style= "font-size:2.0rem; color:white; font-family:'Roboto Slab', serif;">Contate-nos</p>

    <!-- Nome -->
    <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" style="font-size:1.0rem;font-family:'Roboto Slab', serif" placeholder="Nome">

    <!-- Email -->
    <input type="email"  name="email" id="defaultContactFormEmail" class="form-control mb-4" style="font-size:1.0rem;font-family:'Roboto Slab', serif" placeholder="E-mail">

    <!-- Assunto -->
    <label>Descrição do contato</label>
    <select name="descriptioncontact" class="browser-default custom-select mb-4" style= "font-size:1.0rem;font-family:'Roboto Slab', serif;">
        <option value="troca" selected>Troca</option>
        <option value="numero errado">Número errado</option>
        <option value="defeito">Defeito</option>
        <option value="outros">Outros</option>
    </select>

    <!-- Messagem -->
    <div class="form-group">
        <textarea name="description" class="form-control rounded-0" style="font-size:1.0rem;font-family:'Roboto Slab', serif" id="exampleFormControlTextarea2" rows="3" placeholder="Descreva"></textarea>
    </div>

    <!-- Copiar mensagem-->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" style="font-size:1.0rem;font-family:'Roboto Slab', serif" for="defaultContactFormCopy">Envie-me uma cópia desta mensagem</label>
    </div>

    <!-- buttão enviar -->
    <button class="btn btn-info btn-block" style="font-size:1.0rem;font-family:'Roboto Slab', serif;" type="submit">Enviar</button>
<br>
</form>
<!-- Default form contact -->


@endsection