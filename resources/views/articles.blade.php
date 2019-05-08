@extends('layouts.app')

@section('content')
    <h1 class='display-1'> Articles </h1>

    @foreach($articles as $article)
        <div style='margin: 20px;'>
            <header>
                <h2> 
                    <a href="{{ route('articles.show', $article->id) }}"> {{ $article->title }} </a> 
                </h2>
            </header>
        </div> 
    @endforeach
@endsection