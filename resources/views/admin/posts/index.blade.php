@extends('layouts.admin')

@section('content')

<h1>Posts</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">User</th>
      <th scope="col">Category</th>
      <th scope="col">Photo</th>
      <th scope="col">Title</th>
      <th scope="col">Gody</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
    </tr>
  </thead>
  <tbody>
      @if('$posts')
      @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td scope="row">{{$post->user->name}}</td>
      <td scope="row">{{$post->category_id}}</td>
      <td scope="row">{{$post->photo_id}}</td>
      <td scope="row">{{$post->title}}</td>
      <td scope="row">{{$post->body}}</td>
      <td scope="row">{{$post->created_at->diffForHumans()}}</td>
      <td scope="row">{{$post->updated_at->diffForHumans()}}</td>

    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection