<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <style type="text/css">
            #pdf_container {
                background: #ccc;
                text-align: center;
                display: none;
                padding: 5px;
                height: 820px;
                overflow: auto;
            }
        </style>
    </head>

    <body>
        <button type="button" id="btnPreview" class="btn btn-primary btn-lg active mb-3" onclick="LoadPdfFromUrl('http://localhost/wpu-login/assets/file/manual-mutu.pdf')">
            Preview Document
        </button>

        <?php if ($_SESSION['role_id'] === '1') : ?>
            <button class="btn btn-primary btn-lg active mb-3" onclick="printCanvas()">
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print
            </button>
        <?php endif; ?>

        <div id="pdf_container"></div>

        <!-- PDF.js library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf_viewer.min.css" rel="stylesheet" type="text/css" />

        <!-- PDF.js JavaScript -->
        <script type="text/javascript">
            var pdfjsLib = window["pdfjs-dist/build/pdf"];
            pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js";

            var pdfDoc = null;
            var scale = 1; // Set Scale for zooming PDF.
            var resolution = 2; // Set Resolution to Adjust PDF clarity.

            function LoadPdfFromUrl(url) {
                pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
                    pdfDoc = pdfDoc_;

                    var pdf_container = document.getElementById("pdf_container");
                    pdf_container.style.display = "block";
                    pdf_container.innerHTML = ""; // Clear any existing content

                    for (var i = 1; i <= pdfDoc.numPages; i++) {
                        RenderPage(pdf_container, i);
                    }
                });
            }

            function RenderPage(pdf_container, num) {
                pdfDoc.getPage(num).then(function(page) {
                    var canvas = document.createElement("canvas");
                    canvas.id = "pdf-" + num;
                    var ctx = canvas.getContext("2d");
                    pdf_container.appendChild(canvas);

                    var spacer = document.createElement("div");
                    spacer.style.height = "20px";
                    pdf_container.appendChild(spacer);

                    var viewport = page.getViewport({
                        scale: scale
                    });
                    canvas.height = resolution * viewport.height;
                    canvas.width = resolution * viewport.width;

                    var renderContext = {
                        canvasContext: ctx,
                        viewport: viewport,
                        transform: [resolution, 0, 0, resolution, 0, 0],
                    };

                    page.render(renderContext);
                });
            }

            function printCanvas() {
                var pdf_container = document.getElementById('pdf_container');
                var printWindow = window.open('', '', 'height=600,width=800');

                printWindow.document.open();
                printWindow.document.write('<html><head><title>Print PDF</title>');
                printWindow.document.write('<style>body{margin:0;}canvas{display:block; margin:auto;}</style>');
                printWindow.document.write('</head><body>');

                var canvases = pdf_container.getElementsByTagName('canvas');
                for (var i = 0; i < canvases.length; i++) {
                    var canvas = canvases[i];
                    var img = canvas.toDataURL('image/png');
                    printWindow.document.write('<img src="' + img + '"/>');
                }

                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.focus();
                printWindow.print();
            }
        </script>
    </body>

    </html>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->