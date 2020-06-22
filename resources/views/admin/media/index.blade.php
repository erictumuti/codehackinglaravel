@extends('layouts.admin')


@section('content')

<h1>Media</h1>
@if(@photos)
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Created</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($photos as $photo)
    <tr>
      <th scope="row">{{$photo->id}}</th>
      <td><img height="50" src="{{$photo->file}}" alt=""></td>
      <td>{{$photo->created_at ? $photo->created_at : 'no date'}}</td>
      <td>
      {!! Form::open(['action' => ['AdminMediasController@destroy', $photo->id],'method' => 'DELETE']) !!}
      <div class="form-group">
      {!! Form::submit('Delete', ['class' => 'btn btn-danger ']) !!}
      </div>
      
      {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endif
@stop