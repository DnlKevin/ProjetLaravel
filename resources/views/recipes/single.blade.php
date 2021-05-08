@extends('/layouts/main')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >


@section('content')

<div class="grid-x align-center">
    <div class="cell medium-8">
   
        @if(session()->has('info'))
            <div class="alert alert-success" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{ session('info') }}
            </div>
       
         @endif
        <div class="blog-post">
        <h3 class="text-info">{{ $recipe->title }} </h3>
        <div align="center">
        <img class="thumbnail center-block" style="width: "300px;" src="{{asset('media')}}/{{$recipe->image}}">
        </div>
        <p><h5 class="text-info">Description:</h5> {{ $recipe->content }}</p>
        <p><h5 class="text-info">Ingredient:</h5> {{ $recipe->ingredients }}</p>
        <div class="callout">
          <ul class="menu simple">
            <li class="text-primary">
                <span><i class="fi-torso"> Auteur: {{ $author->name }}</i></span>
        
            </li>
            
            <li class="text-primary">
                Comments: <form method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="message" name="message" placeholder="Laissez un commentaire">
            <input style="color : blue" type="submit" value="Envoyer">
        </form>
            </li>
          </ul>
        </div>

      
        <hr>
        

              <hr><br/><br/>
      </div>
    </div>
</div>

@endsection
