@extends('layouts.app')

@section('content')
  <div class=" page-container "><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
    <h1>Créer personnel</h1>
    {!! Form::open(['method'=>'POST','action'=>'autoPersonnelController@store']) !!}
      <div class="form-group">
         {!! Form::hidden('user_id',Auth::user()->id) !!}
      </div>
      <div class="form-group">
        {!! Form::label('nom', 'Nom:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('prenom', 'Prenom:') !!}
        {!! Form::text('prenom',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('adress', 'Adress:') !!}
        {!! Form::text('adress',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('telephone', 'telephone:') !!}
        {!! Form::text('telephone',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('creer', ['class'=>'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
@endsection
