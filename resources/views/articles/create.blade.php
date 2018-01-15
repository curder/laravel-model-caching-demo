@extends('layouts.app')

@section('content')

<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">Create Article</div>
        <div class="panel-body">
    
            {{ Form::open(['route' => 'articles.store', 'method' => 'post']) }}
                @include('articles._form')
            {{ Form::close() }}
            
        </div>
    </div>
</div>

@endsection