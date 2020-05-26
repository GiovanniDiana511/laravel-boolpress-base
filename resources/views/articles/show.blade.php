<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Articolo {{$article->id}}</title>
        <link rel="stylesheet" href={{asset('css/app.css')}}>
    </head>
    <body>
        <div class="container">
            <header>
                <nav>
                    <ul>
                        <li> <a href="{{route('articles.index')}}">Home</a> </li>
                        <li> <a href="{{route('articles.create')}}">Crea</a> </li>
                    </ul>
                </nav>
            </header>
            <h3>Articolo {{$article->id}}</h3>
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <th>Immagine</th>
                            <th>Titolo</th>
                            <th>Autore</th>
                            <th>Testo</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <img src="{{$article->img}}" alt="not found"> </td>
                                <td> <h2>{{$article->title}}</h2> </td>
                                <td> <small>{{$article->author}}</small> </td>
                                <td> <p>{{$article->body}}</p> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
