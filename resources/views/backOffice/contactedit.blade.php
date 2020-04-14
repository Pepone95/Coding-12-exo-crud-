@extends('layout.admin')
@section('content')

{{-- important --}}
  {{-- /aboutedit/{{$abouts->id}}/update --}}

<h1 class="text-center">Contact EDIT</h1>
<div class="text-center">
  {{-- J'ai créer la Route etc mais pas besoin dans la section Contact.--}}
{{-- <a href="/contactedit/create" class="btn btn-warning">Create</a> --}}
</div>
  <div class="container mt-5 text-center bg-light">
    <div class="row">
      <div class="col-1">
        <p>ID:</p>
      </div>
      <div class="col-1">
        <p>Adresse:</p>
      </div>
      <div class="col-3">
        <p>Email:</p>
      </div>
      <div class="col-3">
       <p>Numéro de Téléphone:</p>
      </div>
      <div class="col-3">
       <p>Action:</p>
      </div>
    </div>
  </div>

  @foreach ($contacts as $contact)
  <div>
  <div class="container mt-2">
    <div class="row">
      <div class="col-1">
        <div class="text-center">
        <p>{{$contact->id}}</p>
        </div>
      </div>
      <div class="col-2">
      
        <p>{{$contact->adress}}</p>
      
      </div>
      <div class="col-3">
      
        <p>{{$contact->email}}</p>
      
      </div>
      <div class="col-3">
      
        <p>{{$contact->phone}}</p>
      
      </div>
      <div class="col-3">
       <a href="/contactedit/{{$contact->id}}/edit" class="btn btn-success">Edit</a>
       <a href="/contactedit/{{$contact->id}}/destroy" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>

      
  @endforeach
  
@endsection

