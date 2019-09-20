@extends('layouts.master')
@section('content')

    <form action="validar.php" method="post" class="col-12 fomul">
        <div class="contact_form_body">
        <h2 >Contacto</h2>
        <section class="col-xl-5 contact_left">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="Apellido" placeholder="Apellido">
        <input type="text" name="telefono" placeholder="Telefono">
        <input type="text" name="e-mail" placeholder="e-mail">
        </section>
        <section class="col-xl-5 contact_right">
        <textarea name="mensaje" placeholder="escriba aqui su mensaje"></textarea>
        <input type="button" value="Enviar" id="contact_boton">
        </section>
        </div>
    </form>
@endsection
