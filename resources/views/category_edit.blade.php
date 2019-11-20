@extends('layouts.master')
@section('content')


<div class="maincontainer-register">
    <h1>Editando Categorías</h1>
    <div class="col-12 col-md-8 container-register-edit ">
        <form class="form " method="POST" action= "{{ url('category_edit',$category->id) }}" novalidate >{{-- saque del action singup --}}
            {{method_field('PUT')}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <label for="category">Categoría  {{$category->id}}</label>
                    <input class="form-control "type="text" required name="categoryName" value="{{ $category->category_name }} " placeholder="">
                    {!! $errors->first('categoryName','<span  class=error>:message</span>') !!}
                </div>
            </div>
            <button class=" btn btn-register " type="submit" >Guardar</button>
        </form>
        <div class="category-search-group">
            <form action="/category_search" method="GET" class="category-search-form">
                <input type="text" class="category-search-box" name="busqueda">
                <input type="submit" class="category-search"    value="Buscar">
                <a href="{{url('category_create')}}" class="category_add"><i class="fas fa-upload">     Agregar Categoría</i></a>
            </form>
        </div>
    </div>
</div>
@endsection
