@extends('layout.admin')
@section('content')
<div class="container d-flex justify-content-center">
  <div class="col-5">
    <div class="container">
      <form method="post" action="/teamedit/{{$teams->id}}/update">
        @csrf

        <div class="form-group">
          <label class="mt-5 text-danger">Mini Titre:</label>
          <input type="text" value="{{$teams->name}}" name="name" class="form-control" id="" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="mt-5 text-danger">Description:</label>
          <input type="text" name='description' value="{{$teams->description}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="mt-5 text-danger">Image:</label>
          <input type="text" name='img_team' value="{{$teams->img_team}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Valider</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection