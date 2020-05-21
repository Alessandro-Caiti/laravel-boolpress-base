<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Test post</h1>

        @foreach ($posts as $post)
            <div class="">
                <h2><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2>
                <h4>{{$post->author}}</h4>
                <div class="">
                    <p>{{$post->body}}</p>
                </div>
                <p>{{$post->img}}</p>
            </div>
        @endforeach
    </body>
</html>
