<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Boolpress</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
                <h5><a href="{{route('posts.edit', $post->id)}}">Modifica</a></h5>
                <div><form action="{{route('posts.destroy', $post->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Elimina</button>
                </form> </div>
            </div>
        @endforeach
    </body>
</html>
