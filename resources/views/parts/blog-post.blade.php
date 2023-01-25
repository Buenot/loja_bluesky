@section('content')

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
        <h6 class="mb-2 d-flex align-items-start" name="Navegue"  style= "color:white;font-family: 'Roboto Slab', serif;">Navegue por</h6>    
      <h2 class="mb-3 d-flex align-items-start" style= "font-size:1.8rem; color:white; font-family:'Roboto Slab', serif;">Categorias</h2>

        <div class="row"style= "background-color:black;">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../mdb/img/camisetastreatwear.png" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body" style="background-color: rgba(  3, 152, 158 );">
                <h5 class="card-title" style= "color:white;background-color:rgba(  3, 152, 158  ); font-size:1.8rem; font-family: 'Roboto Slab', serif;">Camisetas</h5>
                <a href="{{url('/camisetas')}}" class="btn" style="color:rgba(  3, 152, 158  ); background-color:white; font-size:0.7rem;font-family:'Roboto Slab', serif;">Clique aqui</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../mdb/img/Moletonsstreatwear.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body" style="background-color: rgba( 3, 152, 158 );">
                <h5 class="card-title" style= "color:white;background-color:rgba(  3, 152, 158  ); font-size:1.8rem; font-family: 'Roboto Slab', serif;">Moletons</h5>
                <a href="{{url('/moletons')}}" class="btn" style="color:rgba(  3, 152, 158  ); background-color:white; font-size:0.7rem;font-family:'Roboto Slab', serif;">Clique aqui</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src= "../mdb/img/toucastreatwear.png" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body" style="background-color: rgba(  3, 152, 158 );">
                <h5 class="card-title" style= "color:white;background-color:rgba( 3, 152, 158  ); font-size:1.8rem; font-family: 'Roboto Slab', serif;">Toucas</h5>
                <a href="{{url('/toucas')}}" class="btn" style="color:rgba(  3, 152, 158 ); background-color:white; font-size:0.7rem;font-family:'Roboto Slab', serif;">Clique Aqui</a>
              </div>
            </div>
          </div>
        </div>
        <div ><br><br></div>
        <div>
          <img src="../mdb/img/bannerrodape.png"  class="img-fluid"/> 
        </div>
      </section>
</div>
@endsection