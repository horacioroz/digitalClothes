@extends('layouts.admin')
@section('content')


<div class="maincontainer-register">
    <h1>Crear Color</h1>
    <div class="col-12 col-md-8 container-register-edit ">
        <form class="form " method="POST" action= "{{ url('color_create') }}" novalidate >{{-- saque del action singup --}}
            {{-- {{method_field('PUT')}} --}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    {{-- <input type="hidden" name="id" value="{{$color->id}}"> --}}
                    <label for="color">Crear Color</label>
                    <input class="form-control "type="text" required name="color_name" value="" placeholder="Nombre del color">
                    {!! $errors->first('color_name','<span  class=error>:message</span>') !!}
                </div>
            </div>
            <div class="color_form_footer">
            <p><button class=" btn btn-register " type="submit" >Guardar</button></p>
            <a href="{{ url('color_list') }}" class="color_list_link"  >Volver al Listado de Colores</a>
            </div>
        </form>
    </div>
</div>
@endsection
