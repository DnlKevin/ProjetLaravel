
@extends('layouts/main')
@section('content')
<h1>Home</h1>
<ul>
     @foreach ( $recipes as $recipe )
     <li> <a href="/recipes/{{ $recipe->id}}">{{$recipe->title}}</a> </li>

     @endforeach
</ul>

@endsection



