@extends('layouts.app')

@section('content')
    <div class=" page-container "><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <h1>edit  un Candidat</h1>
        {!! Form::model($candidat, ['method'=>'PATCH','action'=>['CandidatController@update', $candidat->id]]) !!}
        <div class="form-group">
            {!! Form::hidden('user_id',Auth::user()->id) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nom', 'Nom:') !!}
            {!! Form::text('nom',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('prenom', 'Prenom:') !!}
            {!! Form::text('prenom',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cin', 'CIN:') !!}
            {!! Form::text('cin',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('adresse', 'Adress:') !!}
            {!! Form::text('adresse',null,['class'=>'form-control']) !!}
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
