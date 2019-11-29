@extends('layouts.admin')
@section('content')


<div class="maincontainer-register">
    <h1>Crear Talle</h1>
    <div class="col-12 col-md-8 container-register-edit ">
        <form class="form " method="POST" action= "{{ url('size_create') }}" novalidate >{{-- saque del action singup --}}
            {{-- {{method_field('PUT')}} --}}
            {!!csrf_field()!!}
            <div class="form-user-edit">
                <div class="form-group-edit">
                    {{-- <input type="hidden" name="id" value="{{$size->id}}"> --}}
                    <label for="size">Crear size</label>
                    <input class="form-control "type="text" required name="size_name" value="" placeholder="Nombre del size">
                    {!! $errors->first('size_name','<span  class=error>:message</span>') !!}
                </div>
            </div>
            <div class="size_form_footer">
            <p><button class=" btn btn-register " type="submit" >Guardar</button></p>
            <p><a href="{{ url('size_list') }}" class="size_list_link"  >Volver al Listado de Talles</a></p>
            </div>
        </form>
    </div>
</div>
@endsection
