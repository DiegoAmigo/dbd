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

        

        <script>
            function myFunction() {
              var x = document.getElementById("pais_origen").value;
              var datos = <?= json_encode($datos) ?>;
              
              var largo = datos.length;
               document.getElementById("ciudad_origen").innerHTML = "";
                for (i = 0; i < largo; i++) {
                    if (datos[i][1].nombre_pais == x) {
                        document.getElementById("ciudad_origen").innerHTML =  document.getElementById("ciudad_origen").innerHTML + "<option>" + datos[i][0].nombre_ciudad + "</option>";
                    }
                  
                }

            }

            function myFunction2() {
              var x = document.getElementById("pais_destino").value;
              var datos = <?= json_encode($datos) ?>;
              
              var largo = datos.length;
               document.getElementById("ciudad_destino").innerHTML = "";
                for (i = 0; i < largo; i++) {
                    if (datos[i][1].nombre_pais == x) {
                        document.getElementById("ciudad_destino").innerHTML =  document.getElementById("ciudad_destino").innerHTML + "<option>" + datos[i][0].nombre_ciudad + "</option>";
                    }
                  
                }


            }

            

            function mostrar_vuelta2() {
                element = document.getElementById("fecha_vuelta");
                element2 = document.getElementById("fecha_vuelta_frase");
                element3 = document.getElementById("selectores_ida_vuelta");
                check1 = document.getElementById("vuelo_hotel");
                check2 = document.getElementById("vuelo_transporte");
                check3 = document.getElementById("vuelo_transporte_hotel");
                check4 = document.getElementById("vuelo");
                check5 = document.getElementById("ida");
                check6 = document.getElementById("vuelta");
                if (check1.checked || check2.checked || check3.checked ) {
                    element.style.display='block';
                    element2.style.display='block';
                    element3.style.display='none';
                    mostrar_vuelta();
                }
                else {
                    if(check4.checked)
                    {
                        element3.style.display='block';
                        if (check5.checked) 
                        {
                            ocultar_vuelta();
                        }
                        if (check6.checked) 
                        {
                            mostrar_vuelta();
                        }

                    }
                    else{
                        element3.style.display='none';
                    }
                    element.style.display='none';
                    element2.style.display='none';
                    ocultar_vuelta();
                }
            }


            

        </script>

        

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
                myFunction();
                myFunction();
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
    <body onLoad= "myFunction();myFunction2();mostrar_vuelta2()" >

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
                
                <a class="navbar-brand mr-6 h1" href="check-in">Check-In</a>
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
                    <form method="POST"  action="{{ route('iniciar_reserva') }}" style="width: 748px;height: 326px;">
                        {{ csrf_field() }}
                        <h2 class="sr-only">Login Form</h2>
                        <div class="illustration"></div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type=radio id="vuelo" name="opciones"  value = "1" onchange="mostrar_vuelta2()" required checked>
                                <label for="vuelo"><span>Vuelo</span></label>
                            </div>
                            <div class="form-check">
                                
                                <input type=radio id="vuelo_hotel" name="opciones"  value = "2" onchange="mostrar_vuelta2()">
                                <label for="vuelo_hotel"><span>Vuelo + Hotel</span></label>
                            </div>
                            <div class="form-check">
                                
                                <input type=radio id="vuelo_transporte" name="opciones"  value = "3" onchange="mostrar_vuelta2()">
                                <label for="vuelo_transporte"><span>Vuelo + Transporte</span></label>
                            </div>
                            <div class="form-check">
                                
                                <input type=radio id="vuelo_transporte_hotel" name="opciones"  value = "4" onchange="mostrar_vuelta2()">
                                <label for="vuelo_transporte_hotel"><span>Vuelo + Transpote + Hotel</span></label>
                            </div>
                        </div>

                        <div id = "selectores_ida_vuelta">
                            <label for="ida"><span>Solo Ida</span></label>
                            <input type=radio id="ida" name="ida_vuelta"  value = "1" onchange="ocultar_vuelta()" checked>
                            <label for="vuelta"><span>Ida y vuelta</span></label>
                            <input type=radio id="vuelta" name="ida_vuelta"  value = "2" onchange="mostrar_vuelta()">
                        </div>


                        <label>origen</label>
                        <select id="pais_origen" name="pais_origen" onchange="myFunction()" class="form-control" style="margin-top: 0px;" required>
                            <optgroup  label="This is a group">
                                @foreach((array)$datos as $dato)
                                    <option>{{last($dato)->nombre_pais}}</option>
                                @endforeach
                            </optgroup>
                        </select>

                        <select id="ciudad_origen" name="ciudad_origen"  class="form-control" style="margin-top: 0px;" required>
                            
                        </select>

                        <p >Fecha Ida </p>

                        <input id="fecha_ida" name="fecha_ida" width="276"  required/>
                        <script>
                            var date = new Date(); 
                            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate()); 
                            var fin = new Date(2019,11,31);
                            $('#fecha_ida').datepicker({
                              uiLibrary: 'bootstrap4',
                              locale: 'es-es',
                              minDate: today,
                              maxDate: fin,
                              format: 'yyyy-mm-dd'
                                
                            });
                        </script>


                        <p id="fecha_vuelta_frase" >Fecha vuelta </p>

                        <input id="fecha_vuelta" name="fecha_vuelta" width="276"  />
                        <script>
                            var date = new Date(); 
                            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate()); 
                            var fin = new Date(2019,11,31);
                            $('#fecha_vuelta').datepicker({
                              uiLibrary: 'bootstrap4',
                              locale: 'es-es',
                              minDate: today,
                              maxDate: fin,
                              format: 'yyyy-mm-dd'
                                
                            });

                            function ocultar_vuelta(){
                                $( '#fecha_vuelta' ).datepicker( 'destroy' );
                                $( '#fecha_vuelta' ).hide();
                                $( "#fecha_vuelta_frase" ).hide();
                            }

                            function mostrar_vuelta(){
                                $( "#fecha_vuelta_frase" ).show();
                                $( "#fecha_vuelta" ).show();
                                $( "#fecha_vuelta" ).datepicker({
                              uiLibrary: 'bootstrap4',
                              locale: 'es-es',
                              minDate: today,
                              maxDate: fin
                                
                            });
                            }
                        </script>



                        <label style="margin-top: 1px;padding-top: -14px;">Destino</label>
                        <select id="pais_destino" name ="pais_destino" onchange="myFunction2()" class="form-control" style="margin-top: -5px;height: 38px;" required>
                            <optgroup  label="Pais destino">
                                @foreach((array)$datos as $dato)
                                    <option>{{last($dato)->nombre_pais}}</option>
                                @endforeach
                            </optgroup>
                        </select>

                        


                        <select  class="form-control" name ="ciudad_destino" style="margin-top: 0px;"  required>
                            <optgroup id="ciudad_destino"  label="Ciudad destino">
                                
                            </optgroup>
                        </select>
                        

                        <label style="margin-top: 1px;padding-top: -14px;">Cantidad de viajeros</label>
                        <select id="cantidad_personas" name ="cantidad_personas" class="form-control" style="margin-top: -5px;height: 38px;">
                            
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            
                        </select>

                        <div class="form-group">
                            <button class="btn btn-primary bg-info btn-block" type="submit">Viajar</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        </div>



        
        <div id = "selectores_ida_vuelta">
            <label for="ida"><span>Solo Ida</span></label>
            <input type=radio id="ida" name="ida_vuelta" onchange="mostrar_vuelta()">
            <label for="vuelta"><span>Ida y vuelta</span></label>
            <input type=radio id="vuelta" name="ida_vuelta" onchange="mostrar_vuelta()">
        </div>

        <div id = "selectores_origen" class="form-group">
            <p >Origen</p>
            <div >
            <select id="pais_origennn" onchange="myFunction()" class="form-control">
                @foreach((array)$datos as $dato)
                <option>{{last($dato)->nombre_pais}}</option>
                @endforeach
            </select>

            <select id="ciudad_origenn"  class="form-control">
 
            </select>
            <p >Fecha Ida </p>
            <input type="date" name="fecha" min="<?php echo date("Y-m-d");?>"
                                  max="2019-12-31" step="2">
            </div>
        </div>


        
        
        <div id = "fecha_vuelta">
            <p >Fecha vuelta </p>
            <input type="date" name="fecha" min="<?php echo date("Y-m-d");?>"
                                  max="2019-12-31" step="2">
        </div>
        

        

        
        

        
    </body>
</html>
