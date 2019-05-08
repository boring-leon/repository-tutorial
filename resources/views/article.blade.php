@extends('layouts.app')

@section('content')
    <article>
        <header>
            <h1 class='display-4'> {{ $article->title }} <h1>
        </header>
            
        <section>
            <p class='lead'> {{ $article->body }} </p>
        </section>

        <footer>
            <small> {{ $article->created_at }} </small>
        </footer>
    </article>
@endsection