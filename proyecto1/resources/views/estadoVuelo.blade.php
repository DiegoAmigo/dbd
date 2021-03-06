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
    <!--imagenes-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/images/pto montt.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/antofa.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/images/pto montt.jpg" alt="Third slide">
        </div>
     </div>
    </div>
<!-- barra que se encuentra bajo la imagen-->
    <nav class="navbar navbar-light bg-info ">
        <a class="navbar-brand mb-auto h1" href="/">LON</a>
        <a class="navbar-brand mr-6 h1" href="ayuda2">Inicio</a>
            
            <a class="navbar-brand mr-6 h1" href="hotel">Hoteles</a>
            <a class="navbar-brand mr-6 h1" href="#">Transportes</a>
            <a class="navbar-brand mr-auto h1" href="#">Disabled</a>
            <a class="btn btn-light action-button mr-2" role="button" href="#">Registrarse</a>
            <a class="btn btn-light action-button" role="button" href="#">iniciar sesión</a>
     </nav>
    <!-- opciones de las cajas-->
    @inject('transporteController', 'App\Http\Controllers\TransporteController')
                                <?php 
                                    $datos =  $transporteController->Transport_city($idDestino);
                                ?>

    <section class="features-icons bg-white text-center">
      <div class="container" style="margin-top: 10%">
        <div class="row" style="margin-left: 10%">
        <?php 
          $cantidad = 0
          ?>
         @foreach((array)$datos as $dato)
          @if (empty ($dato) == false )
            <form method="POST" action="{{ route('siguiente_2') }}">
              @csrf
              {{$cantidad = $cantidad + 1}}
             <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="/images/auto1.png" alt="Card image cap">
              <div class="card-body ">
                <h5 class="card-title">{{head($dato)->empresa_transporte}}</h5>
                <p class="card-text">capacidad: {{head($dato)->capacidad_transporte}} personas</p>
                <input id= "tipoReserva" name = "tipoReserva" value = "{{$tipoReserva}}" style="display:none">
              <input id= "idDestino" name = "idDestino" value = "{{$idDestino}}" style="display:none">
              <input id= "idOrigen" name = "idOrigen" value = "{{$idOrigen}}" style="display:none">
              <input id= "idVuelo" name = "idVuelo" value = "{{$idVuelo}}" style="display:none">
              <input id= "idHotel" name = "idHotel" value = "{{$idHotel}}" style="display:none">
              <input id= "idHabitacion" name = "idHabitacion" value = "{{$idHabitacion}}" style="display:none">
                <input id= "idTransporte" name = "idTransporte" value = "{{head($dato)->id}}" class="btn btn-primary" style="display:none">
                <button type="submit" class="btn btn-primary">
                                        
                                        {{ __('Comprar') }}
                                    </button>

              </div>
             </div>
         @endif

         @endforeach

         @if ($cantidad == 0 )

            <form method="POST" action="{{ route('siguiente') }}">
              @csrf
             <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="/images/auto1.png" alt="Card image cap">
              <div class="card-body ">
                <h5 class="card-title">No hay transportes disponibles</h5>
                <p class="card-text"></p>
                
                <input id= "tipoReserva" name = "tipoReserva" value = "{{$tipoReserva}}" style="display:none">
              <input id= "idDestino" name = "idDestino" value = "{{$idDestino}}" style="display:none">
              <input id= "idOrigen" name = "idOrigen" value = "{{$idOrigen}}" style="display:none">
              <input id= "idVuelo" name = "idVuelo" value = "{{$idVuelo}}" style="display:none">
                <input id= "idTransporte" name = "idTransporte" value = "0" class="btn btn-primary" style="display:none">
                <button type="submit" class="btn btn-primary">
                                        
                                        {{ __('Omitir') }}
                                    </button>
              </div>
             </div>
            
            

         @endif
      
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