@extends('layout.admin')
@section('content')

<div class="container d-flex justify-content-center">
  <div class="col-5">
    <div class="container">
      <form method="post" action="/testimonialedit/{{$testimonials->id}}/update">
        @csrf
        <div class="form-group">
          <label class="mt-5 text-danger">Nom:</label>
          <input type="text" value="{{$testimonials->name}}" name="name" class="form-control" id="" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="mt-5 text-danger">Description:</label>
          <input type="text" name='description' value="{{$testimonials->description}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="mt-5 text-danger">Image:</label>
            <input type="text" name='img_profil' value="{{$testimonials->img_profil}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="mt-5 text-danger">Commentaire:</label>
            <input type="text" name='commentaire' value="{{$testimonials->commentaire}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Valider</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection