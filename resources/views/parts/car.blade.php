@section('content')
@section('content')
<header>
<div style= "background-color:black;" >
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

    <!-- Main Container -->
    <div class="container">
    
        <!-- back ground-->
  
    <div ><br><br><br></div>
    <div style= "background-color:white;" >
    <!--layout principal-->
      <section class="text-center border border-light p-7 col-9"  style="margin: auto;>
        <!-- Shopping Cart table -->

        <div class= "table-responsive">

          <table class="table product-table">

            <!-- Table head -->
            <thead>
              <tr>
                <th></th>
                <th class="font-weight-bold">
                  <strong>Produto</strong>
                </th>
                <th></th>
                <th class="font-weight-bold">
                  <strong>Preço</strong>
                </th>
                <th class="font-weight-bold">
                  <strong>Remover</strong>
                </th>
                <th></th>
              </tr>
            </thead>
            <!-- /.Table head -->

            <!-- Corpo da tabela -->
            <tbody>

              <!-- /.Primeira linha -->
              @foreach ($products as $product)
              <tr>
                <th scope="row">
                <img src="../mdb/img/{{$product->category}}/{{$product->id}}.jpg" alt="" class="img-fluid z-depth-0">
                <td>
                  <h5 class="mt-3">
                    <strong>{{$product->name_product}}</strong>
                  </h5>
                  <p class="text-muted">{{$product->description}}</p>
                </td>
                <td></td>
                <td>R$ {{$product->price}}</td>
                  </div>
                </td>
                </td>
                <td>
                  <form method="POST" action="/removecar">
                    @csrf
                    <input type="hidden" name="idCard" value={{$product->crr_id}} />
                    <button type="submit" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X</button>
                  </form>
                </td>
              </tr>
              @endforeach
              <!-- Quarta linha -->
              <tr>
                <td colspan="2"></td>
                <td>
                  <h4 class="mt-">
                    <strong>Total</strong>
                  </h4>
                </td>
                <td class="text-right">
                  <h4 class="mt-2">
                    <strong>R$ {{$total}}</strong>
                  </h4>
                <td colspan="3" class="text-right">

                <form method="POST" action="/finishbuy">
                  @csrf
                  <button type="submit" class="btn btn-primary btn-rounded">Finalizar compra <i class="fas fa-angle-right right"></i></button>
                </form> 
                </td>
              </tr>
              <!-- Quarta linha -->

            </tbody>
            <!-- /.Corpo da tabela -->

          </table>

        </div>
        <!-- Tabela do carrinho de compras -->

      </section>

    </div>
    <!-- /Contêiner Principal -->

  </main>
 <!--Layout principal-->
  <div style= "background-color:black;" >
  <div ><br><br><br></div>
@endsection