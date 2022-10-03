@extends ('layouts.master');

@section('title', 'Best Movies')

@section('content')
    @foreach($movies as $movie)
        <div>
            <h3>
                <a href="{{ route('single-movie-route', ['id' => $movie->id]) }}">
                {{$movie->title}}
                </a>
            </h3>
            <p>{{$movie->storyline}}</p>
        </div>
    @endforeach
@endsection