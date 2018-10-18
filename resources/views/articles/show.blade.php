@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ $article->title }}</h1></div>

                <div class="card-body">

                    <p>
                        <img src="{{ $article->getFirstMediaUrl('main_images', 'main') }}" />
                    </p>

                    <p>
                        <b>Author:</b> {{ $article->author->name }}
                    </p>
                    <p>
                        <b>Categories:</b>
                        {!! $article->categories_links !!}
                    </p>
                    <p>
                        <b>Tags:</b>
                        {!! $article->tags_links !!}
                    </p>

                    <p>{!! nl2br($article->article_text) !!}</p>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('articles.sidebar')
        </div>
    </div>
</div>
@endsection
