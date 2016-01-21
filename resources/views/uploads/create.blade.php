@extends('master')

@section('content')

<div class="row">
	<h1>Upload New Files</h1>
	{!! Form::open(array(
			'url' => 'uploads', 
			'id' => 'uploadForm',
			'class' => 'dropzone',
			'files' => true
			)) !!}
    <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
	{!! Form::close() !!}
</div>

@stop