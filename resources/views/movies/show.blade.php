@extends ('layouts.master')

@section('title', 'Movie')

@section('content')

  <div class="blog-post">
    <h2 class="blog-post-title">{{$movie->title}}</h2>
    <h5 class="blog-post-meta">Genre:
      <a href="{{ route('genre-route', ['genre' => $movie->genre]) }}">{{$movie->genre}}</a>
    </h5>
    <p class="blog-post-meta">Produced by {{$movie->director}}</p>
    <p class="blog-post-meta">Year: {{$movie->year_produced}}</p>
    <p class="blog-post-meta">Storyline: {{$movie->storyline}}</p>
  </div>
  {{-- @dd($movie); --}}
    <div>
      <h4 >Comments:</h4>

      <ul>
      @foreach($movie->comments as $comment)
        <li>
          <p>{{$comment->content}}</p> 
          <p class="font-italic">created: {{$comment->created_at}}</p>
        </li>
      @endforeach
      </ul>
    </div>
<form method="POST" action="/movies/{{$movie->id}}/comments">

  @csrf
  
  <label for="">Comment</label>
  {{-- <input type="text" name="content"> --}}
  <textarea name="content" id="" cols="10" rows="5"></textarea>
  <button type="submit">Post comment</button>

  @error('content')
    @include('partials.error')
  @enderror
</form>
@endsection





