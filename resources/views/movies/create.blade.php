@extends ('layouts.master');

@section('title', 'Add a movie');

@section('content')

<form method="POST" action="/movies">

    @csrf

    <div class = "mb-3">
        <label class="form-label"for="">Title</label>
        <input type="text" name="title" placeholder="title.." class = "form-control">
    </div>

    @error('title')
        @include('partials.error')
    @enderror

    <div class = "mb-3">
        <label class="form-label"for="">genre</label>
        <input type="text" name="genre" placeholder="genre.." class = "form-control">
    </div>

    @error('genre')
        @include('partials.error')
    @enderror

    <div class = "mb-3">
        <label class="form-label"for="">director</label>
        <input type="text" name="director" placeholder="director.." class = "form-control">
    </div>

    @error('director')
        @include('partials.error')
    @enderror

    <div class = "mb-3">
        <label class="form-label"for="">year produced</label>
        <input type="text" name="year_produced" placeholder="year_produced.." class = "form-control">
    </div>

    @error('year_produced')
        @include('partials.error')
    @enderror

    <div class = "mb-3">
        <label class="form-label" for="">Storyline</label>
        <textarea name="body" cols="40" rows="15" class = "form-control" placeholder="Storyline...""></textarea>
    </div>

    @error('storyline')
        @include('partials.error')
    @enderror

    <button type="submit" class="btn btn-primary">Add</button>
</form>