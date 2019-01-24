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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="height: 393px">
     <div class="carousel-inner" style="height: 393px">
        <div class="carousel-item active" style="height: 393px">
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
            <a class="navbar-brand mr-auto h1" href="transporte">Transportes</a>
            <a class="btn btn-light action-button mr-2" role="button" href="#">Registrarse</a>
            <a class="btn btn-light action-button" role="button" href="#">iniciar sesión</a>
     </nav>

    <div>
        <!--todo lo que sería el formulario-->
    <div class="container">
        <div class="form-group">
            <div>
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a role="tab" data-toggle="tab" href="ayuda2" class="nav-link">Vuelo</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="vueloHotel">Vuelo y hotel</a></li>
                    <li class="nav-item"><a role="tab" data-toggle="tab" href="vueloTransporte" class="nav-link active">Vuelo y Transporte</a></li>
                    <li class="nav-item"><a role="tab" data-toggle="tab" href="vueloTransporteHotel" class="nav-link">Vuelo, Hotel y Transporte</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab-1"></div>
                    <div role="tabpanel" class="tab-pane" id="tab-2">
                        <p>Content for tab 2.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab-3">
                        <p>Content for tab 3.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 163px;margin-top: 17px;">
            <div class="col-md-12" style="width: 1096px;height: 330px;">
                <form method="post" style="width: 748px;height: 326px;">
                    <h2 class="sr-only">Login Form</h2>
                    <div class="illustration"></div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="formCheck-2" />
                            <label class="form-check-label" for="formCheck-2">Vuelo ida</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="formCheck-1" /><label class="form-check-label" for="formCheck-1">Vuelo ida + vuelta</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck-4"/>
                            <label class="form-check-label" for="formCheck-4">Hotel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="formCheck-4" checked="true" />
                            <label class="form-check-label" for="formCheck-4">Transporte</label>
                        </div>
                    </div>
                    <label>origen</label>
                    <select class="form-control" style="margin-top: 0px;">
                        <optgroup label="This is a group">
                            <option value="12" selected>This is item 1</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </optgroup>
                    </select>
                    <label style="margin-top: 1px;padding-top: -14px;">Destino</label>
                    <select class="form-control" style="margin-top: -5px;height: 38px;">
                        <optgroup label="This is a group">
                            <option value="12" selected>This is item 1</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </optgroup>
                    </select>
                    <div class="form-group">
                        <button class="btn btn-primary bg-info btn-block" type="submit">Viajar</button>
                    </div>
                    <a href="#" class="forgot">Forgot your email or password?</a>
                </form>
            </div>
        </div>
    </div>
    </div>
  </body>