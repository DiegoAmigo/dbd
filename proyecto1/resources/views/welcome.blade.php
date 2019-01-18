<!doctype html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Compra pasajes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
<script src="http://demo.expertphp.in/js/jquery.js"></script>
<script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
        <script>
            $(document).ready(function() {
            $('#key').on('keyup', function() {
                var key = $(this).val();        
                var dataString = 'key='+key;
            $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: dataString,
                    success: function(data) {
                        //Escribimos las sugerencias que nos manda la consulta
                        $('#suggestions').fadeIn(1000).html(data);
                        //Al hacer click en algua de las sugerencias
                        $('.suggest-element').on('click', function(){
                                //Obtenemos la id unica de la sugerencia pulsada
                                var id = $(this).attr('id');
                                //Editamos el valor del input con data de la sugerencia pulsada
                                $('#key').val($('#'+id).attr('data'));
                                //Hacemos desaparecer el resto de sugerencias
                                $('#suggestions').fadeOut(1000);
                                alert('Has seleccionado el '+id+' '+$('#'+id).attr('data'));
                                return false;
                        });
                    }
                });
            });
        }); 
        </script>

        <!-- Styles -->
        <style>

            input#content {
                display:none;
            }

            span#content {
                display:none;
            }

            div#selectores {
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


            input#vuelo:checked ~ div#selectores {
              display:block;
            }

            input#hide:checked ~ div#selectores {
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

        <label for="vuelo"><span>Vuelo</span></label>
            <input type=radio id="vuelo" name="opciones">

        <label for="vuelo_hotel"><span>Vuelo + Hotel</span></label>
            <input type=radio id="vuelo_hotel" name="opciones">

        <label for="vuelo_transporte"><span>Vuelo + Transporte</span></label>
            <input type=radio id="vuelo_transporte" name="opciones">

        <label for="vuelo_transporte_hotel"><span>Vuelo + Transpote + Hotel</span></label>
            <input type=radio id="vuelo_transporte_hotel" name="opciones">

        <label for="show"><span>(Mostrar)</span></label>
        <input type=radio id="show" name="group">
        <label for="hide"><span>(Ocultar)</span></label>    
        <input type=radio id="hide" name="group">
        


        

        <div id = "selectores" class="form-group">
            
            <div class="top-right links">
            <select id="pais" onchange="myFunction()" class="form-control">
                @foreach((array)$datos as $dato)
                <option>{{last($dato)->nombre_pais}}</option>
                @endforeach
            </select>

            <select id="ciudad"  class="form-control">
 
            </select>
            </div>
        </div>

        <input id="content" placeholder="Saludos">

        <p id="demo"></p>

        <script>
            function myFunction() {
              var x = document.getElementById("pais").value;
              document.getElementById("demo").innerHTML = "You selected: " + x;
              var datos = <?= json_encode($datos) ?>;
              
              var largo = datos.length;
               document.getElementById("ciudad").innerHTML = "";
                for (i = 0; i < largo; i++) {
                    if (datos[i][1].nombre_pais == x) {
                        document.getElementById("ciudad").innerHTML =  document.getElementById("ciudad").innerHTML + "<option>" + datos[i][0].nombre_ciudad + "</option>";
                    }
                  
                }

            }
        </script>

        <div name = "mostrador "class="alert alert-success"></div>

        <label class="checkbox-inline">
          
            <input type="checkbox" id="hotel" value="opcion_2">
            Hotel
          
        </label>
        <label class="checkbox-inline">
          
            <input type="checkbox" id="transporte" value="opcion_3">
            Transporte
          <span class="links" ng-if="!display.fareBreakDown">Precio final desde</span>
        </label>
        

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/cliente/all') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                        @if (Route::has('/cliente/all'))
                            <a href="{{ route('/cliente/all') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div id = "titulo" class="title m-b-md">
                    :)
                </div>

                <div class="links">
                       <a href="https://laravel.com/docs">Hola</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
