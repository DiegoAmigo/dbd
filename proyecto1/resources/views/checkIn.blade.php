<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

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
            
            <a class="navbar-brand mr-6 h1" href="Check-in">Check-In</a>
            <a class="navbar-brand mr-6 h1" href="#">Transportes</a>
            <a class="navbar-brand mr-auto h1" href="#">Disabled</a>
            <a class="btn btn-light action-button mr-2" role="button" href="#">Registrarse</a>
            <a class="btn btn-light action-button" role="button" href="#">iniciar sesión</a>
     </nav>
    <!-- opciones de las cajas-->
    @inject('reservaController', 'App\Http\Controllers\ReservaController')
                                

    <section class="features-icons bg-white text-center">
      <div class="container" style="margin-top: 10%">
        <div class="row" style="margin-left: 10%">

          @auth
          // enviarlo a la otra pagina 
              <?php 
                $reservas =  $reservaController->obtener_reservas_cliente(Auth::user()->id);
              ?>
            

          @else
            <form method="POST" action="{{ route('realizar_checkIn') }}">
            <div class="form-group row">
                            <label for="codigo" class="col-md-4 col-form-label text-md-right">{{ __('código de reserva') }}</label>

                            <div class="col-md-6">
                                <input id="codigo" type="int" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" value="{{ old('codigo') }}" required autofocus>

                                @if ($errors->has('codigo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            


            <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


            <button id="busqueda" type="submit" class="btn btn-primary">
                                        
                                        {{ __('Buscar') }}
                                    </button>
                                   
                                    
                          
              
                            
          @endauth

        
      
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