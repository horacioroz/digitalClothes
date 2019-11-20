@extends('layouts.master')
@section('content')


<div class="maincontainer-register">
    <h1>Crear Categorías</h1>
    <div class="col-12 col-md-8 container-register-edit ">
        <form class="form " method="POST" action= "{{ url('category_create') }}" novalidate >{{-- saque del action singup --}}
            {{-- {{method_field('PUT')}} --}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    {{-- <input type="hidden" name="id" value="{{$category->id}}"> --}}
                    <label for="category">Crear Categoría</label>
                    <input class="form-control "type="text" required name="category_name" value="" placeholder="Nombre de categoría">
                    {!! $errors->first('category_name','<span  class=error>:message</span>') !!}
                </div>
            </div>
            <div class="category_form_footer">
            <p><button class=" btn btn-register " type="submit" >Guardar</button></p>
            <a href="{{ url('category_list') }}" class="categoty_list_link"  >Volver al Listado de Categorías</a>
            </div>
        </form>
    </div>
</div>
@endsection
