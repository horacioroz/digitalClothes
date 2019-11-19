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
    </div>
</div>
@endsection
