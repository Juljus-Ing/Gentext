@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

@extends('modals')

	<h1 class="text-5xl text-center pt-24">Ayudante Generador de Textos</h1>

	<br>		
	@if(count($textos) <=2 )
	<h1 align="center"><a href="nuevotexto" class="rounded-md bg-poli-azuloscuro w-1/8 text-lg-1 text-white font-semibold px-2 py-2">Nuevo Texto</a></h1>
	@endif
	<br>
	@if(count($textos))
	<table class="border-2 border-black w-full text-3xl mx-4 font-semibold ">
		<tr class="border-2 border-black">
			<td><h2>Título</h2></td>
			<td><h2>Progreso</h2></td>
			<td></td>
			<td></td>					
			<td></td>	
		</tr>

		@foreach ($textos as $texto)
			<tr class="border-1 border-black">
				<td class="py-1">{{$texto->titulo}}</td>
				<td>{{$texto->progreso}}</td>
				<td><a href=" {{url('editartexto', Crypt::encrypt($texto->id)) }}" class=" 	  rounded-md bg-poli-azuloscuro w-1/8 text-lg-1 text-white font-semibold px-1/2 py-1/2">editar</a></td>
				<td><a href=" {{url('generardoc', Crypt::encrypt($texto->id))}}" class="rounded-md bg-poli-azuloscuro w-1/8 text-lg-1 text-white font-semibold px-1/2 py-1/2">exportar</a></td>	
				<td><a class="rounded-md bg-poli-azuloscuro w-1/8 text-lg-1 text-white font-semibold px-1/2 py-1/2" href="#" data-toggle="modal" data-target="#eliminarTextoModal">Eliminar</a></				
			</tr>								
		@endforeach
	</table>
	@endif

	<br>
	<br>		

@endsection