@extends('layouts.admin')

@section('content')

@if(Session::has('deleted_user'))

<p class="bg-danger">{{session('delete_user')}}</p>
@endif

<h1>Posts</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Photo</th>
      <th scope="col">User</th>
      <th scope="col">Category</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
    </tr>
  </thead>
  <tbody>
      @if('$posts')
      @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td scope="row"><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
      <td scope="row"><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
      <td scope="row">{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
      <td scope="row">{{$post->title}}</td>
      <td scope="row">{{Str::limit($post->body, 30)}}</td>
      <td scope="row">{{$post->created_at->diffForHumans()}}</td>
      <td scope="row">{{$post->updated_at->diffForHumans()}}</td>

    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection