@extends('layouts.emptyLayout')

@section('content')
    <div class="text-center">
        <img src="https://http.cat/404" alt="">
    </div>
    <div>
        <a href="{{route('home')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection
