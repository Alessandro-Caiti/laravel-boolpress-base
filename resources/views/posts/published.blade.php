<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Test post pubblicati</h1>

        @foreach ($posts as $post)
            <h2>{{$post->title}}</h2>
            <h4>{{$post->author}}</h4>
            <p>{{$post->body}}</p>
            <p>{{$post->img}}</p>
        @endforeach
    </body>
</html>
