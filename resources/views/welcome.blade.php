<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
</head>
<body>
<div class="container">
<div class="col-md-12">
    @yield('content')
</div>

</div>


<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                // eslint-disable-next-line max-len
                uploadUrl: 'https://cksource.com/weuy2g4ryt278ywiue/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>
</body>
</html>
