@extends('layout')
@section('title', 'Home page')
@section('content')
{{$articles-> links('vendor.pagination.bootstrap-4')}}
    <div class="row row-cols-4 mt-3">
        @foreach($articles as $article )
      <div class="col mb-3">
        <div class="card">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
              <h5 class="card-title">{{ $article->title }}</h5>
              <p class="card-text">{{ $article->excerpt }} ></p>
              <a href="{{ route('article',['article'=>$article->id]) }}" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
      </div>

      @endforeach
    </div>
@endsection
