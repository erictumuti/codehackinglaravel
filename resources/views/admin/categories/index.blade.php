@extends('layouts.admin')

@section('content')

<h1>Categories</h1>
<div class="col-sm-6">
{!! Form::open(['action' => 'AdminCategoriesController@store','method' => 'POST']) !!}
<div class="form-group">
 {!! Form::label('name', 'Name:') !!}
 {!! Form::text('name', null, ['class' => 'form-control']) !!}
 </div>
 <div class="form-group">
 {!! Form::submit('Create Category', ['class' => 'btn btn-primary ']) !!}
 </div>
{!! Form::close() !!}
</div>
<div class="col-sm-6">
@if('$categories')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Created Date</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>

    </tr>
    @endforeach
    @endif
  </tbody>
</table>
</div>

@stop