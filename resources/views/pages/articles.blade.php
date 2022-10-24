@extends('templates.main')
@section('main')
    <div class="d-flex mt-5">
        @foreach($articles as $article)
            @include('components.article')
        @endforeach
    </div>


@endsection
