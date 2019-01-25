<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Compra Pasajes</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-info ">
        <a class="navbar-brand mb-auto h1" href="/">LON</a>
        <a class="navbar-brand mr-6 h1" href="#">Home</a>
            
            <a class="navbar-brand mr-6 h1" href="#">Features</a>
            <a class="navbar-brand mr-6 h1" href="#">Pricing</a>
            <a class="navbar-brand mr-auto h1" href="#">Disabled</a>
    </nav>
    <!-- opciones de las cajas-->

    @inject('vuelo_aeropuertoController', 'App\Http\Controllers\Vuelo_AeropuertoController')
    <?php 
      $datos =  $vuelo_aeropuertoController->encontrar_vuelos_ciudad($idOrigen,$idLlegada);
    ?>

    
    <section class="features-icons bg-white text-center">
      <div class="container" style="margin-top: 20%">
        <div class="row" style="margin-left: 10%">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/antofa.jpg" alt="Card image cap">
          <div class="card-body ">
            <h5 class="card-title">Antofagasta</h5>
            <p class="card-text">Super vuelo.</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
         </div>
         @foreach((array)$datos as $dato)
            <form method="POST" action="{{ route('siguiente') }}">
              @csrf
              <input id= "tipoReserva" name = "tipoReserva" value = "{{$tipoReserva}}" style="display:none">
              <input id= "idDestino" name = "idDestino" value = "{{$idLlegada}}" style="display:none">
              <input id= "idOrigen" name = "idOrigen" value = "{{$idOrigen}}" style="display:none">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="../img/antofa.jpg" alt="Card image cap">
              <div class="card-body ">
                <h5 class="card-title">Antofagasta</h5>
                
                <p class="card-text" >{{$dato->hora_inicio}}</p>
                <input id= "idVuelo" name= "idVuelo" value = "{{$dato->id}}" class="btn btn-primary" style="display:none">
                <a href="#" class="btn btn-primary">Comprar</a>
                <button type="submit" class="btn btn-primary">
                                    
                                    {{ __('Comprar') }}
                                </button>
              </div>
             </div>
             </form>
            
          @endforeach
         <div class="card" style="width: 18rem;">
          <img class="card-img-top" alt="Card image cap">
          <div class="card-body ">
            <h5 class="card-title">Arica</h5>
            <p class="card-text">Otro vuelo</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
         </div>
         <div class="card" style="width: 18rem;">
          <img class="card-img-top" alt="Card image cap">
          <div class="card-body ">
            <h5 class="card-title">Pto Montt</h5>
            <p class="card-text">Wen vuelo</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
         </div>
       </div>  
      </div>
      <div class="container" style="margin-top: auto;">
        <div class="row" style="margin-left: 10%;">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" alt="Card image cap">
          <div class="card-body ">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
         </div>
         <div class="card" style="width: 18rem;">
          <img class="card-img-top" alt="Card image cap">
          <div class="card-body ">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
         </div>
         <div class="card" style="width: 18rem;">
          <img class="card-img-top" alt="Card image cap">
          <div class="card-body ">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
         </div>
       </div>  
      </div>
     </section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>