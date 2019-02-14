@extends('layouts.app')

@section('content')
<div class="vignette">
    <div class="row">
        @foreach($vignettes as $vignette)
        <div class="col-md-8">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$vignette->url}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$vignette->legende}}</h5>
                    <a href="{{ url('show', ['vignette'=>$vignette->id]) }}">Voir </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
