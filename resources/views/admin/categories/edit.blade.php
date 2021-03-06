@extends('layouts.admin')

@section('content')

<h1>Categories</h1>
<div class="col-sm-6">
{!! Form::model($category, ['action' => ['AdminCategoriesController@update', $category->id],'method' => 'PATCH']) !!}
<div class="form-group">
 {!! Form::label('name', 'Name:') !!}
 {!! Form::text('name', null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
 {!! Form::submit('Update Category', ['class' => 'btn btn-primary col-sm-4']) !!}
 </div>
{!! Form::close() !!}
{!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
<div class="form-group">
 {!! Form::submit('Delete Category', ['class' => 'btn btn-danger col-sm-4']) !!}
 </div>
</div>
<div class="col-sm-6">


</div>

@stop