<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Crea un articolo</title>
        <link rel="stylesheet" href={{asset('css/app.css')}}>
    </head>
    <body>
        <div class="container">
            <h3>Crea un articolo</h3>
            <div class="col-12">
                <form action="{{route('articles.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <label for="title">Titolo</label>
                        <input type="text" placeholder="Inserisci il titolo" name="title" value="">
                    </div>
                    <div>
                        <label for="title">Testo</label>
                        <textarea name="body" rows="8" cols="80" placeholder="Inserisci il testo"></textarea>
                    </div>
                    <div>
                        <label for="title">Autore</label>
                        <input type="text" placeholder="Inserisci il nome" name="author" value="">
                    </div>
                    <div >
                        <label for="not-published">Non pubblicato</label>
                        <input type="radio" id="not-published" name="published" value="0"></input>
                        <label for="not-published">Pubblicato</label>
                        <input type="radio" id="published" name="published" value="1"></input>
                    </div>
                    <div>
                        <input type="submit" name="" value="Salva">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
