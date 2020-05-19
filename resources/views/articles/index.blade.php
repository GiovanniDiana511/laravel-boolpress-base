@foreach ($articles as $article)
    <h2>{{$article->title}}</h2>
    <h4>{{$article->author}}</h4>
    <img src="{{$article->img}}" alt="">
    <p>{{$article->body}}</p>
    <small>{{$article->created_at}}</small>
@endforeach
