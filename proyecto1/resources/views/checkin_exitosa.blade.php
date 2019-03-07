<!doctype html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/messages/messages.es-es.js"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script type="text/javascript" src="bootstrap-datepicker.es.js" charset="UTF-8"></script>

        <title>Compra pasajes</title>

        


        

        <!-- Styles -->
        <style>

            input#content {
                display:none;
            }

            span#content {
                display:none;
            }

            div#selectores_origen {
                display:none;
            }

            div#selectores_destino {
                display:none;
            }

            

            span#selectores {
                display:none;
            }

            input#vuelo:checked ~ input#content  {
              display:block;
            }

            input#hide:checked ~ input#content  {
                display:none;
            }


            input#vuelo:checked ~ div#selectores_origen {
              display:block;
            }

            input#vuelo:checked ~ div#selectores_destino {
              display:block;
            }

            input#vuelo_hotel:checked ~ div#selectores_origen {
              display:block;
            }

            input#vuelo_hotel:checked ~ div#selectores_destino {
              display:block;
            }

            input#vuelo_transporte:checked ~ div#selectores_origen {
              display:block;
            }

            input#vuelo_transporte:checked ~ div#selectores_destino {
              display:block;
            }

            
            input#vuelo_transporte_hotel:checked ~ div#selectores_origen {
              display:block;
            }

            input#vuelo_transporte_hotel:checked ~ div#selectores_destino {
              display:block;
            }


            div#selectores_ida_vuelta {
                display:none;
            }
            input#vuelo:checked ~ div#selectores_ida_vuelta {
              display:block;
            }
            
            div#fecha_vuelta {
                display:none;
            }


            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .checkbox-inline{
                color: orange;
                background-color:#636b6f ;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .checkbox-inline #checkboxEnLinea1 label{
                color: blue;
                background-color:#636b6f ;
                padding: 0 45px;
                font-size: 23px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .form-control{
                color: orange;
                background-color:#ffffff ;
                padding: 10 250px;
                font-size: 13px;
                font-weight: 600;
                
            }
            
        </style>
    </head>
    <body>

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
            <a class="navbar-brand mr-6 h1" href="ayuda2">Home</a>
                
                <a class="navbar-brand mr-6 h1" href="hotel">Hoteles</a>
                <a class="navbar-brand mr-6 h1" href="transporte">Transportes</a>
                <a class="navbar-brand mr-auto h1" href="#">Disabled</a>
                

                @if (Route::has('login'))
                    
                        @auth
                            <a href="{{ url('/cliente/all') }}">Home</a>
                        @else
                            <a class="btn btn-light action-button" role="button" href= "{{ route('login') }}">iniciar sesión</a>
                           

                            @if (Route::has('register'))
                                <a class="btn btn-light action-button mr-2" role="button" href="{{ route('register') }}">Registrarse</a>
                                
                            @endif
                            
                        @endauth
                    
                @endif

         </nav>



         <!--todo lo que sería el formulario-->
         <div class="container">
            <div class="row" style="margin: 163px;margin-top: 17px;">
                <div class="col-md-12" style="width: 1096px;height: 330px;">
                    <div class="alert alert-success">
                        <a href="{{ route('inicio') }}" class="alert-link">se ha realizado Check-in exitosamente, click aqui para regresar a la pagina principal</a>
                    </div>
                </div>
            </div>
        </div>

        

        
        

        
    </body>
</html>
