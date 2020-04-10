@extends('layout.admin')
@section('content')


    <h1 class="text-center">Subscribe EDIT</h1>
    <div class="container mt-5 ">
      <div class="row">
        <div class="col-1">
          <p>ID:</p>
        </div>
        <div class="col-3">
          <p>Titre:</p>
        </div>
        <div class="col-3">
          <p>Description:</p>
        </div>
        <div class="col-3">
          <p>Action:</p>
        </div>
      </div>
    </div>

    @foreach ($subscribes as $subscribe)
    <div class="container mt-2 ">
      <div class="row">
        <div class="col-1">
          <div class="">
            <p>{{$subscribe->id}}</p>
          </div>
        </div>
        <div class="col-3">

          <p>{{$subscribe->titre}}</p>

        </div>
        <div class="col-3">

          <p>{{$subscribe->description}}</p>

        </div>
        <div class="col-3">
          <a href="/subscribeedit/{{$subscribe->id}}/edit" class="btn btn-success">Edit</a>
        </div>
      </div>
    </div>
>


@endforeach

@endsection