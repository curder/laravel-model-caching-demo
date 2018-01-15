<div class="form-group @if($errors->has('title'))has-error @endif">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', old('title'), ['class'=>'form-control']) }}
    @if($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p>@endif
</div>

<div class="form-group @if($errors->has('body'))has-error @endif">
    {{ Form::label('body') }}
    {{ Form::textarea('body', old('body'), ['class'=>'form-control']) }}
    @if($errors->has('body')) <p class="help-block">{{ $errors->first('body') }}</p>@endif
</div>

{{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}