@extends('layout')
@section('title', $article->title)
@section('content')
    <a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-text">{{ $article->body }}</p>
        </div>
    </div>

@endsection
