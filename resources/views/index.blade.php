<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Reconocer Documentos</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('js/pdf.mjs') }}" type="module"></script>
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
    <script type="module">
      var defaultPDF = "{{ asset('documents/default.pdf') }}"
      var assetsURL = "{{ asset('documents/') }}"
      var { pdfjsLib } = globalThis
      pdfjsLib.GlobalWorkerOptions.workerSrc = "{{ asset('js/pdf.worker.mjs') }}"

      document.getElementById('form').addEventListener('submit', async (e) => {
        e.preventDefault()
        var cedula = document.getElementById('cedula').value
        var urlPdf = `${assetsURL}/${cedula}.pdf`
        renderPdf(urlPdf)
      });

      async function renderPdf(pdfToRender) {
        var pdf
        try {
          pdf = await pdfjsLib.getDocument(pdfToRender).promise
        } catch(e) {
          pdf = await pdfjsLib.getDocument(defaultPDF).promise
        }

        if (!pdf) return console.error('No se pudo cargar el pdf')

        var page = await pdf.getPage(1)
        var scale = 1
        var viewport = page.getViewport({scale})
        var canvas = document.getElementById('pdf')
        var context = canvas.getContext('2d')
        canvas.height = viewport.height
        canvas.width = viewport.width
        var renderContext = {
          canvasContext: context,
          viewport,
        };
        await page.render(renderContext);
      }
    </script>
  </body>
</html>