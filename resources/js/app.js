import './bootstrap'
import * as pdfjs from 'pdfjs-dist'
import * as pdfWorker from 'pdfjs-dist/build/pdf.worker.mjs';

pdfjs.GlobalWorkerOptions.workerSrc = pdfWorker

document.getElementById('form').addEventListener('submit', async (e) => {
  e.preventDefault()
  const cedula = document.getElementById('cedula').value
  const urlPdf = `${assetsURL}/${cedula}.pdf`
  renderPdf(urlPdf)
})

async function renderPdf(pdfToRender) {
  let pdf
  try {
    pdf = await pdfjs.getDocument(pdfToRender).promise
  } catch(e) {
    pdf = await pdfjs.getDocument(defaultPDF).promise
  }

  if (!pdf) return console.error('No se pudo cargar el pdf')

  const page = await pdf.getPage(1)
  const scale = 1
  const viewport = page.getViewport({scale})
  const canvas = document.getElementById('pdf')
  const context = canvas.getContext('2d')

  canvas.height = viewport.height
  canvas.width = viewport.width
  const renderContext = {
    canvasContext: context,
    viewport,
  }
  page.render(renderContext);
}
