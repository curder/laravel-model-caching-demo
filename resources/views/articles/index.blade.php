@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel-group" id="articles" role="tablist" aria-multiselectable="true">

        @foreach($articles as $article)
            <div class="panel panel-default">
                <div class="panel-heading" role="tab">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#articles" href="#article-{{ $article->id }}" aria-expanded="false" aria-controls="article-{{ $article->id }}" class="collapsed">
                        {{ $article->title }}
                    </a>
                    <span class="badge">{{ $article->cached_comments_count }}</span>
                    </h4>
                </div>
                <div id="article-{{ $article->id }}" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                    <ul class="list-group">
                        @foreach($article->cached_comments as $comment)
                            <li class="list-group-item">{{ $comment->body }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
     
    </div>


</div>

@endsection