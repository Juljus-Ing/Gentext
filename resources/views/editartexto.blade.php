@extends('layouts.app')

@section('title', 'NuevoTexto')

@section('content')

@extends('modals')

<div class="block mx-auto my-12 p-8 bg-white w-2/3 border border-gray-200 rounded-lg shadow-lg">
	<h1 class="text-3xl text-center font-bold">Gentext Nuevo</h1>

	<form class="mt-4" method="POST" action="">
		@csrf
		<div id="datostextodiv">
			<h2 style="color:#0F385A;">Datos del Texto</h2>
			<hr>

			<br>	
			<label class="font-semibold">¿En qué asignatura se presentará el texto?</label>
			<input onkeyup="mostrarFormulario()" type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$texto[0]->asignatura}}" placeholder="Asignatura" name="asignatura" id="asignatura"> 
			<br>	

			<label class="font-semibold">¿Cúal es el nombre del profesor a quíen se presentará el texto?</label>
			<input onkeyup="mostrarFormulario()" type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$texto[0]->docente}}" placeholder="Docente" name="docente" id="docente"> 		
			<br>
		</div>

		<div id="titulodiv">
			<br>
			<h2 style="color:#0F385A;">Título</h2>
			<hr>

			<br>	
			<label class="font-semibold">¿Cúal es el posible título para tu texto?</label>
			<input onkeyup="mostrarFormulario()" type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$texto[0]->titulo}}" placeholder="Título" name="titulo" id="titulo"> 
			<br>	
 		</div>
		
		<div id="pclavediv">
			<br>
			<h2 style="color:#0F385A;">Palabras Clave</h2>
			<hr>

			<br>	
			<label class="font-semibold">¿Cúales son las palabras clave para tu texto?(Separar con coma ",")</label>
			<input onkeyup="mostrarFormulario()" type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" value="{{$texto[0]->pclave}}" placeholder="Palabras Clave" name="pclave" id="pclave"> 
			<a href="#" class="text-blue-900" data-toggle="modal" data-target="#palabrasClaveModal">Ver ejemplo</a>
			<br>				
 		</div>
		
		<div id="lluviaideasdiv">
			<br>
			<h2 style="color:#0F385A;">Lluvia de ideas</h2>
			<hr>

			<br>
			<p class="font-semibold">Aquí puedes incluir una lluvia de ideas que te allude a inspirarte, a relacionar y ordenar los conceptos sobre los cuales quiere escribir. <br>
			Puedes crear diagramas de lluvias de ideas en las siguientes herramientas:				
			</p>
			<a target="_blank" href="https://miro.com/es/" style="color:#0F385A;" class="font-semibold text-blue-800">Miro</a>
			<br>
			<a target="_blank" href="https://www.lucidchart.com/" class="font-semibold text-blue-800">Lucidchart</a>
			<br>
			<a target="_blank" href="https://www.mentimeter.com/" class="font-semibold text-blue-800">Mentimeter</a>	
			<br>
			<br>
			<a href="#" class="text-blue-900" data-toggle="modal" data-target="#lluviaIdeasModal">Ver ejemplo</a>
			<br>
			<label class="font-semibold">Luego que tengas tu diagrama sube el archivo en forma de imagen en formato jpg.</label>
			<br>
			<label class="font-semibold">Subir archivo png/jpeg.</label>
			<br>
			{{$texto[0]->lluviaideas}}
			<input class="w-1/2" type="file" id="lluviaideasimg" name="lluviaideasimg" accept="image/png, image/jpeg"/>			
			<br>	
 		</div>

		<div id="resumendiv">
			<br>
			<h2 style="color:#0F385A;">Resumen</h2>
			<hr>

			<br>	
			<label class="font-semibold">Aquí puedes incluir un resumen inicial del texto que se va a desarrollar en un párrafo de máximo 100 palabras.</label>
			<br>
			<textarea onkeyup="mostrarFormulario()" rows="4" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Resumen" name="resumen" id="resumen"> {{$texto[0]->resumen}}</textarea>
			<br>
			<a href="#" class="text-blue-900" data-toggle="modal" data-target="#resumenModal">Ver ejemplo</a>
			<br>	
 		</div>

 		<div id="introducciondiv">
			<br>
			<h2 style="color:#0F385A;">Introducción</h2>
			<hr>

			<br>	
			<label class="font-semibold">Aquí vas a escribir la introducción del texto, siguiendo las siguientes recomendaciones:</label>
			<br>
			<br>
			<label class="font-semibold">1.La introducción debe ser escrita en un solo párrafo separando las ideas con un punto seguido.</label>
			<br>
			<label class="font-semibold">2.Esta sección debe ser escrita de tal manera que pueda ser entendido por alguien que no sabe del tema.</label>
			<br>
			<label class="font-semibold">3.Se debe escribir ¿De qué estamos hablando? y ¿Por qué estamos hablando de esto? (Importancia).</label>
			<br>
			<label class="font-semibold">4.En esta sección, no se escribe la opinión del autor del texto, solo se escriben los hechos concernientes al tema.</label>
			<br>
			<label class="font-semibold">5.Incluya de 1 a 2 referencias bibliográficas usando normas APA, que contengan la información escrita en la sección (resaltando la información con sus propias palabras).</label>
			<br>
			<label class="font-semibold">6.Escriba entre 100 y 200 palabras en esta sección.</label>
			<br>
			<label class="font-semibold">7.La introducción se realiza en 1 solo párrafo en el cual se designan 2 partes:</label>
			<br>			
			<br>
			<li class="font-semibold">1.¿Qué es lo que se sabe? (hechos): Datos de mi tema a nivel mundial, continental o latinoamericano. Datos de mi tema en mi pais.</li>
			<li class="font-semibold">2.¿Qué es lo que no se sabe? (importancia): Datos que no se conocen acerca de mi tema. ¿Por qué es importante discutir mi tema?. Motivo de interés en el tema. Punto de vista a defender.</li>
			<br>
			<a href="#" class="text-blue-900" data-toggle="modal" data-target="#introduccionModal">Ver ejemplo</a>
			<br>
			<textarea onkeyup="mostrarFormulario()" rows="5" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Introducción" name="introduccion" id="introduccion"> {{$texto[0]->introduccion}}</textarea>
			<br>
			<br>
			<a href="" class="font-semibold text-blue-600">Añadir referencia bibliográfica</a> 
			<br>	
 		</div>

 		<div id="desarrollodiv">
			<br>
			<h2 style="color:#0F385A;">Desarrollo</h2>
			<hr>

			<br>	
			<label class="font-semibold">Aquí vas a escribir el desarrollo del texto, siguiendo las siguientes recomendaciones:</label>
			<br>
			<br>
			<label class="font-semibold">1.Esta sección debe ser escrita citando fuentes de los ultimos 5 años que hablan acerca del tema.</label>
			<br>
			<label class="font-semibold">2.Se debe escribir datos reportados en publicaciones científicas que formen una postura de acuerdo con el tema.</label>
			<br>
			<label class="font-semibold">3.En esta sección, no se escribe la opinión del autor del ensayo, solo deben ser escritos los hechos concernientes al tema, reportados en artículos científicos.</label>
			<br>
			<label class="font-semibold">4.Debe incluir entre 2 y 3 referencias bibliográficas (cada referencia corresponde a 1 párrafo), citar y referenciar usando normas APA y verificar que contengan la información escrita en la sección (usar la información de los artículos o fuentes, pero utilizar palabras propias).</label>
			<br>
			<label class="font-semibold">5.Esta sección debe contener entre 200 y 300 palabras.</label>
			<br>			
			<label class="font-semibold">6.El desarrollo de un texto argumentativo debe ser escrito en 2 o 3 párrafos separando las ideas utilizando punto aparte, incluyendo la siguiente información:</label>
			<br>			
			<br>
			<li class="font-semibold">Hallazgos del primer artículo científico acerca del tema.</li>
			<li class="font-semibold">Hallazgos del segundo artículo científico acerca del tema.</li>
			<li class="font-semibold">Hallazgos del tercer artículo científico acerca del tema (opcional).</li>	
			<br>
			<a href="#" class="text-blue-900" data-toggle="modal" data-target="#desarrolloModal">Ver ejemplo</a>
			<br>
			<textarea onkeyup="mostrarFormulario()" rows="5" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Desarrollo" name="desarrollo" id="desarrollo"> {{$texto[0]->desarrollo}}</textarea>
			<br>
			<br>
			<a href="" class="font-semibold text-blue-600">Añadir referencia bibliográfica</a> 
			<br>	
 		</div>

 		<div id="conclusiondiv">
			<br>
			<h2 style="color:#0F385A;">Conclusión</h2>
			<hr>

			<br>	
			<label class="font-semibold">Aquí vas a escribir la conclusión del texto, siguiendo las siguientes recomendaciones:</label>
			<br>
			<br>			
			<li class="font-semibold">La conclusión de un ensayo académico debe ser escrito en un solo párrafo.</li>
			<li class="font-semibold">Esta sección debe ser escrita escribiendo un análisis acerca de lo escrito previamente en la introducción y en el desarrollo, volviendo a retomar su tesis.</li>
			<li class="font-semibold">En esta sección, si debe ser escrita la opinión del autor del texto argumentativo, dando argumentos que resuman los hallazgos citados y establezcan la percepción, opinión o postura del estudiante al respecto, acorde con lo que se planteó.</li>
			<li class="font-semibold">No incluir referencias bibliográficas en esta sección dado que se habla únicamente sobre la opinión al estudinte acerca de los artículos leídos.</li>	
			<li class="font-semibold">Escribir entre 100 y 150 palabras en esta sección.</li>	
			<br>
			<a href="#" class="text-blue-900" data-toggle="modal" data-target="#conclusionModal">Ver ejemplo</a>
			<br>
			<textarea onkeyup="mostrarFormulario()" rows="5" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Conclusión" name="conclusion" id="conclusion"> {{$texto[0]->conclusion}}</textarea>
			<br>	
 		</div>
 		<input hidden type="text" value="0" name="contador" id="contador">

		<button type="submit" class="rounded-md bg-poli-azuloscuro w-full text-lg text-white font-semibold p-2 my-3">Editar</button>
	</form>
</div>

<script type="text/javascript">
	
	window.load = mostrarFormulario();

	function mostrarFormulario() {
		var titulodiv = document.getElementById("titulodiv");		
		var pclavediv = document.getElementById("pclavediv");
		var lluviaideasdiv = document.getElementById("lluviaideasdiv");
		var resumendiv = document.getElementById("resumendiv");
		var introducciondiv = document.getElementById("introducciondiv");
		var desarrollodiv = document.getElementById("desarrollodiv");
		var conclusiondiv = document.getElementById("conclusiondiv");

		var asignatura = document.getElementById("asignatura").value;
		var docente = document.getElementById("docente").value;
		var titulo = document.getElementById("titulo").value;
		var pclave = document.getElementById("pclave").value;
		var lluviaideasimg = document.getElementById("lluviaideasimg").value;
		var resumen = document.getElementById("resumen").value;
		var introduccion = document.getElementById("introduccion").value;
		var desarrollo = document.getElementById("desarrollo").value;
		var conclusion = document.getElementById("conclusion").value;
		if (asignatura != '' && docente != '') {
			titulodiv.hidden = false;
			document.getElementById("contador").value = "1/7"			
			if (titulo != '') {			
				pclavediv.hidden = false;
				document.getElementById("contador").value = "2/7"
				if (pclave != '') {			
					lluviaideasdiv.hidden = false;							
					resumendiv.hidden = false;
					document.getElementById("contador").value = "3/7"
					if (resumen != '') {			
						introducciondiv.hidden = false;
						document.getElementById("contador").value = "4/7"
						if (introduccion != '') {			
							desarrollodiv.hidden = false;
							document.getElementById("contador").value = "5/7"
							if (desarrollo != '') {			
								conclusiondiv.hidden = false;
								document.getElementById("contador").value = "6/7"
								if (conclusion != '') {
									document.getElementById("contador").value = "7/7"
								}
								else{
									document.getElementById("contador").value = "6/7"
								}											
							}
							else {
								conclusiondiv.hidden = true;
							}			
						}
						else {							
							desarrollodiv.hidden = true;
							conclusiondiv.hidden = true;
						}			
					}
					else {
						introducciondiv.hidden = true;
						desarrollodiv.hidden = true;
						conclusiondiv.hidden = true;
					}									
				}
				else {						
					lluviaideasdiv.hidden = true;
					resumendiv.hidden = true;
					introducciondiv.hidden = true;
					desarrollodiv.hidden = true;
					conclusiondiv.hidden = true;
				}			
			}
			else {	
				pclavediv.hidden = true;
				lluviaideasdiv.hidden = true;
				resumendiv.hidden = true;
				introducciondiv.hidden = true;
				desarrollodiv.hidden = true;
				conclusiondiv.hidden = true;
			}						
		}
		else {			
			titulodiv.hidden = true;
			pclavediv.hidden = true;
			lluviaideasdiv.hidden = true;
			resumendiv.hidden = true;
			introducciondiv.hidden = true;
			desarrollodiv.hidden = true;
			conclusiondiv.hidden = true;
		}			
	}
</script>

@endsection