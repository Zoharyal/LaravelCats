@extends('layouts.app')

@section('content')
<main class="container posts articles">
@if(Session::has('message'))
  <p>{{Session::get('message')}}</p>
  @endif
    @foreach($vignettes as $vignette)
    <article>
        <p>{{$vignette->id}}</p>
        <p>{{$vignette->legende}}</a></p>
        <p><a href="{{ url('show', ['vignette'=>$vignette->id]) }}">Voir</a></p>
        <p><a href="{{ route('showEdit', ['vignette'=>$vignette->id]) }}">Editer</a></p>
        <p><a href="{{ route('delete', ['vignette'=>$vignette->id]) }}">Supprimer</a></p>
        
    </article>
    @endforeach

</main>
@endsection
