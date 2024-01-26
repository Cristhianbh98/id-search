<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Reconocer Documentos</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <script>
      var defaultPDF = "{{ asset('documents/default.pdf') }}"
      var assetsURL = "{{ asset('documents/') }}"
    </script>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
  </head>

  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
          <h1 class="text-primary text-center">Validación de credenciales</h1>
          <form class="d-flex justify-content-center align-items-center mt-2" id="form">
            <div class="form-group d-flex justify-content-center align-items-center">
              <label for="cedula">Cédula:</label>
              <input type="text" class="form-control ms-1" id="cedula" placeholder="Ingresa la cedula...">
            </div>
            <button type="submit" class="btn btn-primary ms-1">Comprobar</button>
          </form>

          <div class="mt-5 d-flex justify-content-center">
            <canvas id="pdf"></canvas>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>