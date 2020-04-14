@extends('layout.admin')
@section('content')


    <h1 class="text-center">Services EDIT</h1>
    <div class="text-center">
      {{-- btn create --}}
      <a href="/servicesedit/create" class="btn btn-warning">Create</a>
    </div>
    {{-- *** --}}
    <div class="container mt-5 text-center bg-light">
      <div class="row">
        <div class="col-1">
          <p>ID:</p>
        </div>
        <div class="col-1">
          <p>Titre:</p>
        </div>
        <div class="col-3">
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

    @foreach ($servicess as $services)
    <div class="container mt-3">
      <div class="row">
        <div class="col-1">
          <div class="text-center">
            <p>{{$services->id}}</p>
          </div>
        </div>
        <div class="col-2">

          <p>{{$services->titre}}</p>

        </div>
        <div class="col-3">

          <p>{{$services->description}}</p>

        </div>
        <div class="col-3">

          <p>{{$services->logo}}</p>

        </div>
        <div class="col-3">
          <a href="/servicesedit/{{$services->id}}/edit" class="btn btn-success">Edit</a>
          <a href="/servicesedit/{{$services->id}}/destroy" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
>


@endforeach

@endsection