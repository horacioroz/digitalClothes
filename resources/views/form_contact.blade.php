@extends('layouts.master')
@section('content')

{{-- @if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif
 --}}
 <div class="maincontainer-register ">
<h1 >Contacto</h1>
<div class="col-12 col-md-8 container-register-edit ">

 {!! Form::open(['route'=>'contact']) !!}
<section class="pull-left">

 <div class="form-user-edit">
<div class="form-group-edit {{ $errors->has('firstName') ? 'has-error' : '' }} ">
    {!! Form::label('Nombre:') !!}
    {!! Form::text('firstName', old('firstName'), ['class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->first('firstName') }}</span>
</div>

<div class="form-group-edit {{ $errors->has('lastName') ? 'has-error' : '' }}">
    {!! Form::label('Apellido:') !!}
    {!! Form::text('lastName', old('lastName'), ['class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->first('lastName') }}</span>
</div>

<div class="form-group-edit {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('Email:') !!}
    {!! Form::text('email', old('email'), ['class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group-edit {{ $errors->has('phone') ? 'has-error' : '' }}">
    {!! Form::label('Teléfono:') !!}
    {!! Form::text('phone', old('phone'), ['class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->first('phone') }}</span>
</div>
</div>
</section>

<section class="pull-right">
<div class="form-group-edit {{ $errors->has('message') ? 'has-error' : '' }}">
    {!! Form::label('Message:') !!}
    {!! Form::textarea('message', old('message'), ['class'=>'form-control textcontact', 'placeholder'=>'Enter Message']) !!}
    <span class="text-danger">{{ $errors->first('message') }}</span>
</div>
<div>
    <button class="btn btn-register ">Contáctenos !!</button>
</div>
</section>
</div>
{!! Form::close() !!}
</div>

@endsection
