<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="">
                <label for="title">Titolo</label>
                <input type="text" name="title" placeholder="Inserisci il titolo">
            </div>
            <div class="">
                <label for="title">Testo</label>
                <textarea name="body" rows="10" cols="30" placeholder="Inserisci il testo"></textarea>
            </div>
            <div class="">
                <label for="title">Autore</label>
                <input type="text" name="author" placeholder="Inserisci il nome dell'autore">
            </div>
            <div class="">
                <label for="title">Immagine</label>
                <input type="text" name="img" placeholder="Inserisci l'immagine">
            </div>
            <div class="">
                <label for="not-published">Non pubblicato</label>
                <input type="radio" id="not-published" name="published" value="0">
                <label for="published">Pubblicato</label>
                <input type="radio" id="published" name="published" value="1">
            </div>
            <div class="">
                <input type="submit" name="" value="Salva">
            </div>
        </form>
    </body>
</html>
