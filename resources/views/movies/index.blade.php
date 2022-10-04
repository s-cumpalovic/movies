@extends ('layouts.master');

@section('title', 'Best Movies')

@section('content')
    @foreach($movies as $movie)
        <div>
            <h3>
                {{$movie->title}}
            </h3>
            <p class="p-3 mb-3">{{Str::limit($movie->storyline, 100)}}</p>
            <a href="{{ route('single-movie-route', ['id' => $movie->id]) }}">
                read more...
            </a>
            <hr><hr>
        </div>
    @endforeach
@endsection