@extends('layouts.app')

@section('content')
<main class="container auth">
@if(Session::has('message'))
  <p>{{Session::get('message')}}</p>
  @endif
    <div class="message error">
    @if($errors->has('description'))
  <p>{{$errors->first('description')}}</p>
  @endif
  @if($errors->has('legende'))
  <p>{{$errors->first('legende')}}</p>
  @endif
  @if($errors->has('url'))
  <p>{{$errors->first('url')}}</p>
  @endif
    </div>
    <form method="POST" action="{{ route('post')}}">
       @csrf
        <input type="text" name="legende"/>
        <textarea name="description"></textarea>
        <input type="text" name="url">
        <input type="submit" value="Créer">
    </form>
</main>

@endsection

