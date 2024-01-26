import './bootstrap'
import * as pdfjs from 'pdfjs-dist'
import * as pdfWorker from 'pdfjs-dist/build/pdf.worker.mjs';

pdfjs.GlobalWorkerOptions.workerSrc = pdfWorker

document.getElementById('form').addEventListener('submit', async (e) => {
  e.preventDefault()
  var cedula = document.getElementById('cedula').value
  var urlPdf = `${assetsURL}/${cedula}.pdf`
  renderPdf(urlPdf)
})

async function renderPdf(pdfToRender) {
  var pdf
  try {
    pdf = await pdfjs.getDocument(pdfToRender).promise
  } catch(e) {
    pdf = await pdfjs.getDocument(defaultPDF).promise
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
  page.render(renderContext);
}
