<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Modifica</title>
        <link rel="stylesheet" href={{asset('css/app.css')}}>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('articles.update', $article->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Titolo</label>
                            <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
                            @error ('title')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="body">Testo</label>
                            <textarea class="form-control" name="body" cols="30" rows="10" placeholder="Inserisci il testo"></textarea>
                            @error ('body')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                            <input class="btn-primary" type="submit" value="Salva">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
