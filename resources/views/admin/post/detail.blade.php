<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: DejaVu Sans;
        }
    </style>
</head>
<body>
<p>{{$post->title}}</p>
<p>{!!$post->content!!}</p>
<p>{{$post->desc}}</p>
</body>
</html>

