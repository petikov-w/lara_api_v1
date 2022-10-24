@extends('templates.main')
@section('main')
    <h2>{{ $articles['title'] ?? NULL }}</h2>
    <p class="mt-5" style="width:90%;font-weight:400;font-size:18px">{{ $articles['body'] ?? NULL }}</p>
    <a href="{{ route('articles') }}" class="btn btn-primary mt-5">Вернутся...</a>
@endsection

