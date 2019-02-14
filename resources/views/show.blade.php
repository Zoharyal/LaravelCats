@extends('layouts.app')

@section('content')
<main class="container posts article">
    
    <div class="message status">
       
    </div>
    
    <div class="message error">
    </div>

    <article>
        <img src="{{$vignette->url}}" alt="">
        <div class="infos"> {{$vignette->legende}}
       </div>
       
        <p>{{$vignette->description}}</p>
    </article>
    
</main>
@endsection
