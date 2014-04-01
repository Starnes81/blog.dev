@extends('layouts.master')


@section('content')

<div>
	{{ Form::label('title', 'Title') }}
    {{ Form::text('title', null) }}
	{{$errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : '' }}
</div>
<div>
	{{ Form::label('body', 'Body') }}
    {{ Form::text('body', null) }}
	{{$errors->has('body') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : '' }}
</div>
{{ Form::submit('Save Post') }}