@extends('public.layouts.base')
@section('title')
    {{$info['judul']}}
@endsection

@section('content')
<div class="flex flex-col justify-center w-full min-h-screen">
    <h1 class="text-4xl font-black md:text-6xl text-center w-full py-24 md:py-32">
        {{ $info['judul'] }}
    </h1>
    <div class="w-full bg-white min-h">
        <div class="w-full mx-16 md:mx-24 prose my-16 h-full">
            {!! $info['content_html'] !!}
        </div>
    </div>
    <div class="mx-16">
        <canvas id="the-canvas" class="w-full border-2" data-link="{{url('/storage/uploads/akademik/'.$info['dokumen'])}}"></canvas>
    </div>
</div>
@endsection

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
