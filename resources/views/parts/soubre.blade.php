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
        <a class="navbar-brand nav-link" target="_blank" href="#!">
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
        <a class="nav-link" href="#">
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

  <div style= "background-color:black;" >
    <div ><br></div>
    <div class="container mt-5">


 <!--Seção: Conteúdo-->
  <section class="dark-grey-text text-center">

    <!-- Cabeçalho da seção -->
    <h2 class="font-weight-bold mb-4 pb-2" style= "font-size:2.0rem; color: rgba(169,169,169); font-family:'Roboto Slab', serif;">Quem somos</h2>
    <!-- Section description -->
    <p class="text-center mx-auto w-responsive mb-5" style= "font-size:1.0rem; color:rgba(169,169,169); font-family:'Roboto Slab', serif;">Fundada em SP 2021, a BlueSky carrega uma identidade jovem e urbana e foi criada por Taina Bueno a partir da vontade de expandir seu estilo pessoal e único para seu grupo social. 
    <br>A rua e seus movimentos são inspiração para nossas criações que ganham forma a partir das vivências urbanas e se materializam dentro da estética streetwear, unindo moda, conforto, utilitarismo e estilo.

  	<!-- Linha de grade -->
    <div class="row">

     <!-- Coluna da grade -->
      <div class="col-lg-4 col-md-12 mb-4">

        <!-- Imagem em destaque -->
        <div class="view overlay rounded z-depth-2 mb-4">
          <img class="img-fluid" src="../mdb/img/sobre/missão.png" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Categoria -->
        <a href="#!" class="pink-text">
          <h6 class="font-weight-bold mb-3"><i class="fa fa-circle"></i></h6>
        </a>
       <!-- Trecho -->
        <p class="dark-grey-text"style= "font-size: 1.0rem;font-family:'Roboto Slab', serif;">Nossa missão é entregar produtos com qualidade e propósito para um público que consideramos e tratamos como família.</p>

      </div>
      <!-- Coluna da grade -->

      <!-- Coluna da grade -->
      <div class="col-lg-4 col-md-6 mb-4">

        <!-- Imagem em destaque -->
        <div class="view overlay rounded z-depth-2 mb-4">
          <img class="img-fluid" src="../mdb/img/sobre/visão.png" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Categoria -->
        <a href="#!" class="deep-orange-text">
          <h6 class="font-weight-bold mb-3"><i class="fas fa fa-circle"></i></h6>
        </a>
       <!-- Trecho -->
        <p class="dark-grey-text" style= "font-size: 1.0rem;font-family:'Roboto Slab', serif;"> A relação que mantemos com nossos clientes alimenta a visão de nos tornarmos a maior e melhor marca digital do Brasil.</p>

      </div>
      <!-- Coluna da grade -->

      <!-- Coluna da grade -->
      <div class="col-lg-4 col-md-6 mb-4">

        <!-- Imagem em destaque -->
        <div class="view overlay rounded z-depth-2 mb-4">
          <img class="img-fluid" src="../mdb/img/sobre/valores.png" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Categoria -->
        <a href="#!" class="blue-text">
          <h6 class="font-weight-bold mb-3"><i class="fas fa fa-circle"></i></h6>
        </a>
        <!-- Trecho -->
        <p class="dark-grey-text"style= "font-size: 1.0rem;font-family:'Roboto Slab', serif;">Nossos valores estão diretamente ligados a ideia de aceitação pessoal, todos podemos usar o que quisermos, autenticidade é tudo.</p>
      

      </div>
      <!-- Coluna da grade -->

    </div>
    <!-- Linha de grade -->

  </section>
 <!--Seção: Conteúdo-->
  </div>
</div>

@endsection