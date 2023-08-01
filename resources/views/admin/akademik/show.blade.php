<x-app-layout>
    @pushOnce('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/web/pdf_viewer.min.css">
    @endPushOnce

    <x-slot name="header">
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div>"
            <div class="mt-4">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center justify-end space-x-1 font-semibold">
                        <div class="px-4 py-2 bg-gray-200 rounded-none dark:bg-dark-eval-2"">
                            <p>{{ $info_akademik->updated_at }}</p>
                        </div>
                        <div class="px-4 py-2 bg-gray-100 rounded-none text-amber-500 dark:bg-dark-eval-2">
                            <a href="{{ route('admin.akademik.info-akademik.edit',[$info_akademik->id]) }}">Click to edit</a>
                        </div>
                    </div>
                </div>
                <h1 class="pb-2 mb-4 text-4xl font-black border-b-4">
                    {{$info_akademik->judul}}
                </h1>
                <div>

                </div>
            </div>
            <div class="prose prose-slate xl:prose-lg dark:prose-invert">
                {!! $info_akademik->content_html !!}
            </div>
            <div class="bg-purple-500 mt-4">
                <canvas id="the-canvas" class="w-full border-2" data-link="{{url('/storage/uploads/akademik/'.$info_akademik->dokumen)}}"></canvas>
            </div>
        </div>
    </div>
    @pushOnce('scripts')
    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/build/pdf.min.js"></script>
    <script>
        var link = document.getElementById('the-canvas').dataset.link;
        // If absolute URL from the remote server is provided, configure the CORS
        // header on that server.
        var url = link;

        // Loaded via <script> tag, create shortcut to access PDF.js exports.
        var pdfjsLib = window['pdfjs-dist/build/pdf'];
        console.log(pdfjsLib);

        // The workerSrc property shall be specified.
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/build/pdf.worker.js';

        // Asynchronous download of PDF
        var loadingTask = pdfjsLib.getDocument(url);
        loadingTask.promise.then(function(pdf) {
        console.log('PDF loaded');

        // Fetch the first page
        var pageNumber = 1;
        pdf.getPage(pageNumber).then(function(page) {
            console.log('Page loaded');

            var scale = 1.5;
            var viewport = page.getViewport({scale: scale});

            // Prepare canvas using PDF page dimensions
            var canvas = document.getElementById('the-canvas');
            var context = canvas.getContext('2d');
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render PDF page into canvas context
            var renderContext = {
            canvasContext: context,
            viewport: viewport
            };
            var renderTask = page.render(renderContext);
            renderTask.promise.then(function () {
            console.log('Page rendered');
            });
        });
        }, function (reason) {
        // PDF loading error
        console.error(reason);
        });
    </script>
    @endPushOnce
</x-app-layout>
