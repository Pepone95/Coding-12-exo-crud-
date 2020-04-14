@extends('layout.admin')
@section('content')


    <h1 class="text-center">Testimonial EDIT</h1>
    <div class="text-center">
      <a href="/testimonialedit/create" class="btn btn-warning">Create</a>
    </div>
    <div class="container mt-5 text-center bg-light">
      <div class="row">
        <div class="col-1">
          <p>ID:</p>
        </div>
        <div class="col-1">
          <p>Nom:</p>
        </div>
        <div class="col-3">
          <p>Description:</p>
        </div>
        <div class="col-3">
          <p>Image:</p>
        </div>
        <div class="col-2">
            <p>Commentaire:</p>
          </div>
        <div class="col-2">
          <p>Action:</p>
        </div>
      </div>
    </div>

    @foreach ($testimonials as $testimonial)
    <div class="container mt-2 ">
      <div class="row">
        <div class="col-1">
          <div class="text-center">
            <p>{{$testimonial->id}}</p>
          </div>
        </div>
        <div class="col-1">
          <p>{{$testimonial->name}}</p>
        </div>
        <div class="col-3">
          <p>{{$testimonial->description}}</p>
        </div>
        <div class="col-3">
          <p>{{$testimonial->img_profil}}</p>
        </div>
        <div class="col-2">
            <p>{{$testimonial->commentaire}}</p>
          </div>
        <div class="col-2">
          <a href="/testimonialedit/{{$testimonial->id}}/edit" class="btn btn-success">Edit</a>
          <a href="/testmonialedit/{{$testimonial->id}}/destroy" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
@endforeach
@endsection