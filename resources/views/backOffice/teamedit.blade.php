@extends('layout.admin')
@section('content')

    <h1 class="text-center">Team EDIT</h1>
    <div class="text-center">
      <a href="/teamedit/create" class="btn btn-warning">Create</a>
    </div>
    <div class="container mt-5 text-center">
      <div class="row">
        <div class="col-1">
          <p>ID:</p>
        </div>
        <div class="col-2">
            <p>Nom:</p>
        </div>
        <div class="col-2">
          <p>Description:</p>
        </div>
        <div class="col-3">
            <p>Image:</p>
          </div>    
        <div class="col-3">
          <p>Action:</p>
        </div>
      </div>
    </div>

    @foreach ($teams as $team)
    <div class="container mt-2 ">
      <div class="row">
        <div class="col-1">
          <div class="text-center">
            <p>{{$team->id}}</p>
          </div>
        </div>
        <div class="col-2">
          <p>{{$team->name}}</p>
        </div>
        <div class="col-2">
          <p>{{$team->description}}</p>
        </div>
        <div class="col-3">
            <p>{{$team->img_team}}</p>
          </div>
        <div class="col-3">
          <a href="/teamedit/{{$team->id}}/edit" class="btn btn-success">Edit</a>
          <a href="/teamedit/{{$team->id}}/destroy" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
@endforeach
@endsection