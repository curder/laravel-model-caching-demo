@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">文章列表</h3>    
        </div>
        <ul class="list-group">
            @foreach($articles as $key => $article)
                <li class="list-group-item">{{ $article->title }}<span class="badge">{{ $article->comments->count() }}</span></li>
            @endforeach
        </ul>
    </div>
    
</div>

@endsection