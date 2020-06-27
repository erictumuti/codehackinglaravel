@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="https://lib.arvancloud.com/ar/dropzone/5.5.1/min/dropzone.min.css">
@stop
@section('content')

<h1>Media</h1>
{!! Form::open(['action' => 'AdminMediasController@store','method' => 'POST','class'=>'dropzone']) !!}
{!! Form::close() !!}
@stop


@section('scripts')

<script src="https://lib.arvancloud.com/ar/dropzone/5.5.1/min/dropzone.min.js"></script>

@stop