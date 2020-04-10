@extends('layout.admin')
@section('content')

{{-- important --}}
  {{-- /aboutedit/{{$abouts->id}}/update --}}

<h1 class="text-center">About EDIT</h1>
<div class="text-center">
<a href="/aboutedit/create" class="btn btn-warning">Create</a>
</div>
  <div class="container mt-5 text-center">
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

  @foreach ($abouts as $about)
  <div class="container mt-2 ">
    <div class="row">
      <div class="col-1">
        <div class="text-center">
        <p>{{$about->id}}</p>
        </div>
      </div>
      <div class="col-2">
      
        <p>{{$about->titre2}}</p>
      
      </div>
      <div class="col-3">
      
        <p>{{$about->description2}}</p>
      
      </div>
      <div class="col-3">
      
        <p>{{$about->img_about}}</p>
      
      </div>
      <div class="col-3">
       <a href="/aboutedit/{{$about->id}}/edit" class="btn btn-success">Edit</a>
       <a href="/aboutedit/{{$about->id}}/destroy" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>

      
  @endforeach
  
@endsection

