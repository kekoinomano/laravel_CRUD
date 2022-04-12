<h1>{{$modo}} empleado</h1>

@if (count($errors)>0)
<div class="alert alert-danger" role="alert">
	<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
</div>
@endif

<div class= "form-group">
<label for = "Nombre"> Nombre </label>
<input type="text" class="form-control" value="{{isset($empleado->Nombre)? $empleado->Nombre : old('Nombre')}}" name = "Nombre" id = "Nombre">
</div>
<div class= "form-group">
<label for = "Apellido"> Apellido </label>
<input type="text" class="form-control" value="{{isset($empleado->Apellido)? $empleado->Apellido : old('Apellido')}}" name = "Apellido" id = "Apellido">

</div>
<div class= "form-group">
<label for = "Correo"> Correo </label>
<input type="text" class="form-control" value="{{isset($empleado->Correo)? $empleado->Correo : old('Correo')}}" name = "Correo" id = "Correo">

</div>
<div class= "form-group">
<label for = "Foto"> Foto </label>
@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
@endif
<input class="form-control" type="file" value="" name = "Foto" id = "Foto">

</div>
<input class="btn btn-success" type="submit" value = "{{ $modo }} Datos">

<a class="btn btn-primary" href="{{url('/empleado')}}">Volver</a>
