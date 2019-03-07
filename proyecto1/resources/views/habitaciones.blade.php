<!doctype html>
<html lang="en">
  <head>
    

    @inject('habitacionController', 'App\Http\Controllers\HabitacionController')
    <?php 
        $datos =  $habitacionController->habitaciones($idHotel,$fecha_ida,$fecha_vuelta);
    ?>
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
    
    <section class="features-icons bg-white text-center">
      <div class="container" style="margin-top: 10%">
        <div class="row" style="margin-left: 10%">
          <?php 
          $cantidad = 0
          ?>
         @foreach((array)$datos as $dato)
          @if (empty ($dato) == false )
              <form method="POST" action="{{ route('reservar') }}">
              @csrf
              <input id= "tipoReserva" name = "tipoReserva" value = "{{$tipoReserva}}" style="display:none">
              <input id= "idDestino" name = "idDestino" value = "{{$idDestino}}" style="display:none">
              <input id= "idOrigen" name = "idOrigen" value = "{{$idOrigen}}" style="display:none">
              <input id= "idVuelo" name = "idVuelo" value = "{{$idVuelo}}" style="display:none">
              <input id= "idTransporte" name = "idTransporte" value = "{{$idTransporte}}" style="display:none">
              <input id= "idHotel" name = "idHotel" value = "{{$idHotel}}" style="display:none">
              <input id= "fecha_ida" name = "fecha_ida" value = "{{$fecha_ida}}" style="display:none">
              <input id= "fecha_vuelta" name = "fecha_vuelta" value = "{{$fecha_vuelta}}" style="display:none">
              {{$cantidad = $cantidad + 1}}
              
              
              
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="/images/hotel1.jpg" alt="Card image cap">
          <div class="card-body ">
            <input id= "idHotel" name= "idHabitacion" value = "{{($dato)->id}}"  style="display:none">
            <h5 class="card-title">Numero de habitacion: {{($dato)->numero_habitacion}}</h5>
            <p class="card-text">Valor por dia: {{($dato)->monto}} USD</p>
            <p class="card-text">Capacidad: {{($dato)->capacidad_habitacion}} personas</p>
            
            
              <button type="submit" class="btn btn-primary">
                                        
                                        {{ __('Seleccionar habitacion') }}
                                    </button>
          </div>
         </div>
         
                
              
              @endif

         @endforeach
         
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