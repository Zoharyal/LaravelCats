@extends('layouts.app')

@section('content')
<main class="container auth">
@if(Session::has('message'))
  <p>{{Session::get('message')}}</p>
  @endif
    <div class="message error">
    @if($errors->has('legende'))
    <p>{{$errors->first('legende')}}</p>
    @endif
    </div>
    <form method="POST" action="{{ route('storeEdit', ['vignette'=>$vignette->id]) }}">
       @method("PUT")
       @csrf
        <input type="text" name="legende" value="{{$vignette->legende}}"/>
        <textarea name="description">{{$vignette->description}}</textarea>
        <input type="submit" value="Modifier">
    </form>
</main>

@endsection

