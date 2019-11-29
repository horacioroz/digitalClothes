@extends('layouts.admin')
@section('content')


<div class="maincontainer-register">
    <h1>Editando Talles</h1>
    <div class="col-12 col-md-8 container-register-edit ">
        <form class="form " method="POST" action= "{{ url('size_edit',$size->id) }}" novalidate >{{-- saque del action singup --}}
            {{method_field('PUT')}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    <input type="hidden" name="id" value="{{$size->id}}">
                    <label for="size">size  {{$size->id}}</label>
                    <input class="form-control "type="text" required name="sizeName" value="{{ $size->size_name }} " placeholder="">
                    {!! $errors->first('sizeName','<span  class=error>:message</span>') !!}
                </div>
            </div>
            <button class=" btn btn-register " type="submit" >Guardar</button>
        </form>
        <div class="size-search-group">
            <form action="/size_search" method="GET" class="size-search-form">
                <input type="text" class="size-search-box" name="busqueda">
                <input type="submit" class="size-search"    value="Buscar">
                <a href="{{url('size_create')}}" class="size_add"><i class="fas fa-upload">     Agregar Talle</i></a>
            </form>
        </div>
    </div>
</div>
@endsection
