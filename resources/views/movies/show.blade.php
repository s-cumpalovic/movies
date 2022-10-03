@extends ('layouts.master')

@section('title', 'Movie')

@section('content')

<div class="blog-post">
    <h2 class="blog-post-title">{{$movie->title}}</h2>
    <h5 class="blog-post-meta">{{$movie->genre}}</h5>
    <p class="blog-post-meta">Produced by {{$movie->director}}</p>
    <p class="blog-post-meta">Year: {{$movie->year_produced}}</p>
    <p class="blog-post-meta">Storyline: {{$movie->storyline}}</p>
    
  </div><!-- /.blog-post -->
