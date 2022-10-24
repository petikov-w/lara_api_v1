@extends('templates.main')
@section('main')
    <h1>Ошибка 404</h1>
    <p> Страница не найдена </p>
    <a href="{{ route('home') }}" class="btn btn-primary mt-5">Вернутся на главную...</a>
@endsection
