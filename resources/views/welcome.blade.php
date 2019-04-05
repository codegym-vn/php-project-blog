<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
    <script src="http://cdn.ckeditor.com/ckeditor5/11.2.0/inline/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    {{--<script src="http://bp.php5.cz/ckeditor/ckeditor.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js"--}}
            {{--type="text/javascript"></script>--}}

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"--}}
            {{--type="text/javascript"></script>--}}

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/sb-admin-2.css')}}">
    {{--<link rel="stylesheet" href="{{asset('css/login-create.css')}}">--}}
</head>
<body>
<div class="container">
    <div class="col-md-12">
        @yield('content')
    </div>

</div>
{{--<script src="{{asset('../node_modules/@ckeditor/ckeditor5-inspector/build/inspector.js')}}"></script>--}}
{{--<script>--}}

    {{--ClassicEditor--}}
        {{--.create( document.querySelector( '#editor' ), {--}}
            {{--plugins: [ Essentials, Paragraph, Heading, List, Bold, Italic ],--}}
            {{--toolbar: [ 'heading', 'bold', 'italic', 'numberedList', 'bulletedList' ]--}}
        {{--} )--}}
        {{--.then( editor => {--}}
            {{--console.log( 'Editor was initialized', editor );--}}

            {{--// Expose for playing in the console.--}}
            {{--window.editor = editor;--}}
        {{--} )--}}
        {{--.catch( error => {--}}
            {{--console.error( error.stack );--}}
        {{--} );--}}
{{--</script>--}}

{{--<script>--}}
    {{--ClassicEditor--}}
        {{--.create(document.querySelector('#editor'), {--}}
            {{--ckfinder: {--}}
                {{--// eslint-disable-next-line max-len--}}
                {{--// eslint-disable-next-line max-len--}}
                {{--uploadUrl: 'https://cksource.com/weuy2g4ryt278ywiue/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'--}}
            {{--}--}}
        {{--})--}}
        {{--.catch(error => {--}}
            {{--console.error(error);--}}
        {{--});--}}
{{--</script>--}}
</body>
</html>
