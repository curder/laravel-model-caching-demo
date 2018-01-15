@extends('layouts.app')

@section('content')

<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">Create Article</div>
        <div class="panel-body">
    
            {{ Form::model($article, ['route' => ['articles.update', $article], 'method' => 'PATCH']) }}
                @include('articles._form')
            {{ Form::close() }}
            
        </div>
    </div>
</div>

@endsection