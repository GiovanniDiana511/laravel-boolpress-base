<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lista Articoli</title>
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
            <h3>Lista articoli</h3>
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Autore</th>
                            <th>Immagine</th>
                            <th>Testo</th>
                            <th>Data Stampa</th>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td> <h2>{{$article->id}}</h2> </td>
                                    <td> <h2>{{$article->title}}</h2> </td>
                                    <td> <h4>{{$article->author}}</h4> </td>
                                    <td> <img src="{{$article->img}}" alt="not found"> </td>
                                    <td> <p>{{$article->body}}</p> </td>
                                    <td> <small>{{$article->created_at}}</small> </td>
                                    <td> <a class="btn btn-primary" href="{{route('articles.show', $article->id)}}">Visualizza</a> </td>
                                    <td> <a class="btn btn-secondary" href="{{route('articles.edit', $article->id)}}">Modifica</a> </td>
                                    <td>
                                        <form action="{{route('articles.destroy', $article->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Elimina">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
