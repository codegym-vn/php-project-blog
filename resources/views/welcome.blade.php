<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="http://cdn.ckeditor.com/ckeditor5/11.2.0/inline/ckeditor.js"></script>

    </head>
    <body>
    <nav aria-label="breadcrumb" >
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
                <a href="#">BLog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tất cả các bài đăng</li>
        </ol>
    </nav>
    @yield('content')
    <script>
        InlineEditor
            .create( document.querySelector( '#editor' ), {
                image: {
                    // You need to configure the image toolbar too, so it uses the new style buttons.
                    toolbar: [ 'imageTextAlternative', '|', 'imageStyleAlignLeft', 'imageStyleFull', 'imageStyleAlignRight' ],

                    styles: [
                        // This option is equal to a situation where no style is applied.
                        'imageStyleFull',

                        // This represents an image aligned to left.
                        'imageStyleAlignLeft',

                        // This represents an image aligned to right.
                        'imageStyleAlignRight'
                    ]
                }
            } )
            .catch( error => {
                console.error( error );
            } );

    </script>
    </body>
</html>
