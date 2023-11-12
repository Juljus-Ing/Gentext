<!-- Librerías -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>

<!-- Cada div tiene un id relacionado a su respectivo input en el archivo .../blade.php -->
<div class="modal fade" id="palabrasClaveModal">
    <div class="modal-dialog">
        <div class="modal-content">
            {{--
            <div class="modal-header">
                cabecera
            </div>
            --}}
            <div class="modal-body">
                <h2>Ejemplo de palabras claves</h2>
                <br>
                <li>Revolución verde</li>
                <li>Plaguicidas</li>
                <li>Fertilizantes</li>
                <li>Aplicación</li>
                <li>Producción</li>
                <li>Población</li>
                <li>Monocultivo</li>
                <li>Exportación de materias primas</li>
                <li>Deforestación</li>                
                <br>
                <input type="submit" data-dismiss="modal" class="btn btnCerrar" value="Cerrar">              
                
            </div>
            {{--  
            <div class="modal-footer">
                Footer
            </div>
            --}}
        </div>
    </div>
</div>

<div class="modal fade" id="lluviaIdeasModal">
    <div class="modal-dialog">
        <div class="modal-content">
            {{--
            <div class="modal-header">
                cabecera
            </div>
            --}}
            <div class="modal-body">
                <img src="{{ asset('lluviaideas.png') }}" alt="tag" >
                <br>
                <input type="submit" data-dismiss="modal" class="btn btnCerrar" value="Cerrar">              
                
            </div>
            {{--  
            <div class="modal-footer">
                Footer
            </div>
            --}}
        </div>
    </div>
</div>

<div class="modal fade" id="resumenModal">
    <div class="modal-dialog">
        <div class="modal-content">
            {{--
            <div class="modal-header">
                cabecera
            </div>
            --}}
            <div class="modal-body">
                <h1>Ejemplo Resumen:</h1>
                <br>
                <h2>“La agricultura se convirtió en la fuente por excelencia del sustento humano, la producción mundial ha sufrido un sin número de cambios en los últimos años influidos por el uso de agroquímicos y fertilizantes. A medida del siglo XX surgió un aumento en la producción agrícola y este supero el aumento actual que se tenía de población y a esto se le llamo “revolución verde”. Esta fue una renovación en la manera de producir fuentes de comercio esta se basaba en la producción del monocultivo y donde se utilizaron con mayor proporción los fertilizantes y plaguicidas y esto trajeron consigo el incremento masivo de muchos cultivos importantes causando así una revolución en el sector productivo.” Tomado de: Martinez-Centeno, A. L., & Huerta Sobalvarro, K. K. (2018). La revolución verde. Rev. Iberoam. Bioecon. Cambio Clim., 4(8), 1040–1052. https://doi.org/10.5377/ribcc.v4i8.6717.
                </h2>
                <br>
                <input type="submit" data-dismiss="modal" class="btn btnCerrar" value="Cerrar">              
                
            </div>
            {{--  
            <div class="modal-footer">
                Footer
            </div>
            --}}
        </div>
    </div>
</div>

<div class="modal fade" id="introduccionModal">
    <div class="modal-dialog">
        <div class="modal-content">
            {{--
            <div class="modal-header">
                cabecera
            </div>
            --}}
            <div class="modal-body">
                <h1>Ejemplo Introducción:</h1>
                <br>
                <h2>“Desde la época de los primeros pobladores, la agricultura se convirtió en la fuente por excelencia de sustento humano creciendo exponencialmente a través del tiempo y proliferándose como el medio por excelencia de comercio y alimento. (Blogspot, S.f) . La producción agrícola mundial ha sufrido un sin número de cambios en los últimos dos siglos potenciando así el uso de agroquímicos y fertilizantes adecuados a la globalización. Se consideraba que el papel del sector agrícola era el de ayudar al desarrollo industrial, que era el elemento esencial de la estrategia de crecimiento, por lo cual se dio uno de los mayores avances en el sector productivo y económico (FAO, 1996)”. Tomado de: Martinez-Centeno, A. L., & Huerta Sobalvarro, K. K. (2018). La revolución verde. Rev. Iberoam. Bioecon. Cambio Clim., 4(8), 1040–1052. https://doi.org/10.5377/ribcc.v4i8.6717.
                </h2>
                <br>
                <input type="submit" data-dismiss="modal" class="btn btnCerrar" value="Cerrar">              
                
            </div>
            {{--  
            <div class="modal-footer">
                Footer
            </div>
            --}}
        </div>
    </div>
</div>

<div class="modal fade" id="desarrolloModal">
    <div class="modal-dialog">
        <div class="modal-content">
            {{--
            <div class="modal-header">
                cabecera
            </div>
            --}}
            <div class="modal-body">
                <h1>Ejemplo Desarrollo:</h1>
                <br>
                <h2>“La Revolución Verde supuso un cambio de paradigma en las prácticas agrícolas de numerosas zonas del mundo, y que se basa en enfoques genéticos (nuevas variedades de ciertas plantas, especialmente cereales) y de nuevas prácticas agrícolas. Pero ha mostrado una serie de efectos indeseables (Iánez, 2007). La disponibilidad de suelo es ya muy escasa. Prácticamente se está arando toda la tierra adecuada del mundo. El uso de terrenos adicionales no rinde lo suficiente, y además en muchos casos habría que roturar territorios de alto valor ecológico que sustentan una biodiversidad de la que la humanidad podría sacar más provecho mediante usos alternativos y sostenibles (FAO, 1996). La tasa de incremento de productividad se ha frenado en los últimos tiempos, de modo que en el periodo 1989-1990 fue de sólo 0.5%. ​

                Se calcula que para el 2020 la demanda global de arroz, maíz y trigo se incrementará un 40% (un 1.3% anual). Con los actuales incrementos anuales se podría en principio satisfacer esa demanda, pero al parecer, esa tasa interanual no es fácil que se mantenga así demasiado tiempo con las técnicas actuales. De hecho, los incrementos por hectárea han bajado desde el 2.2% anual en el periodo 1967-1982 hasta el 1.5% entre 1982 y 1994 (Iánez, 2007).​

                Hay que reconocer un hecho: los actuales rendimientos de las variedades en uso están cerca del máximo teórico. Para darse cuenta de esto, hay que pensar que por meras cuestiones de viabilidad fisiológica, la planta sólo puede dedicar un porcentaje al producto cosechable (en este caso, el grano). Esto es lo que mide el índice de cosecha (Iánez, 2007). Otro dato de perjuicio es que el acceso al agua es uno de los principales factores limitantes. Las mismas prácticas agrícolas recientes hacen gran uso de agua. Entre 1961 y 1996 las zonas irrigadas pasaron de 139 a 263 millones de hectáreas, permitiendo el cultivo de regiones áridas y las cosechas múltiples en climas monzónicos. En la actualidad el 40% de la producción mundial procede de tierras irrigadas, por ello es necesario un cambio pronto en este ámbito (Iánez, 2007).”​

                Tomado de: Martinez-Centeno, A. L., & Huerta Sobalvarro, K. K. (2018). La revolución verde. Rev. Iberoam. Bioecon. Cambio Clim., 4(8), 1040–1052. https://doi.org/10.5377/ribcc.v4i8.6717.
                </h2>
                <br>
                <input type="submit" data-dismiss="modal" class="btn btnCerrar" value="Cerrar">              
                
            </div>
            {{--  
            <div class="modal-footer">
                Footer
            </div>
            --}}
        </div>
    </div>
</div>

<div class="modal fade" id="conclusionModal">
    <div class="modal-dialog">
        <div class="modal-content">
            {{--
            <div class="modal-header">
                cabecera
            </div>
            --}}
            <div class="modal-body">
                <h1>Ejemplo Conclusión:</h1>
                <br>
                <h2>A pesar de su gran importancia, la revolución verde trajo consigo consecuencias que deterioran nuestros recursos y el medio ambiente. Es necesario dar un nuevo impulso a la revolución verde con el fin de atender las necesidades legítimas de las personas expuestas a la inseguridad alimentaria, tanto a nivel nacional como familiar. Y por último, concluyo que la manera en que podemos retomar esta gran revolución actualmente, es siguiendo las bases que actualmente están experimentando, al usar la biotecnología buscando así salvaguardar nuestros recursos y proteger el futuro productivo. Es nuestro deber tomar medidas dentro de lo que podamos y así como retomamos las pautas de la revolución verde y de las prácticas actuales, así mismo no olvidar las maneras tradicionales de cultivar que no le hacen daño a nuestra madre tierra; así podremos evitar una caída del sector productivo y rescatar todo lo que se ha perdido para que nuestros recursos duren más de lo estimado.

                Tomado de: Martinez-Centeno, A. L., & Huerta Sobalvarro, K. K. (2018). La revolución verde. Rev. Iberoam. Bioecon. Cambio Clim., 4(8), 1040–1052. https://doi.org/10.5377/ribcc.v4i8.6717.
                </h2>
                <br>
                <input type="submit" data-dismiss="modal" class="btn btnCerrar" value="Cerrar">              
                
            </div>
            {{--  
            <div class="modal-footer">
                Footer
            </div>
            --}}
        </div>
    </div>
</div>

@if(isset($texto->id)) 
    <div class="modal fade" id="eliminarTextoModal">
    <div class="modal-dialog">
        <div class="modal-content">
            {{--
            <div class="modal-header">
                cabecera
            </div>
            --}}
            <div class="modal-body">
                <h2>¿Está seguro que desea eliminar el registro?</h2>
                
                <input type="submit" data-dismiss="modal" class="btn btncancelar" value="Cancelar">
                <a class="btn btn-primary btneliminar" href=" {{url('eliminarTexto', Crypt::encrypt($texto->id)) }}">eliminar</a>
                
            </div>
            {{--  
            <div class="modal-footer">
                Footer
            </div>
            --}}
        </div>
    </div>
</div>               
@endif 


<style>
    .btncancelar{
        background-color: #0F385A;
        color: white;
        float: left;
    }
    .btneliminar{        
        float: right;
        background-color: #D14424;
    }
    .btnCerrar{
        background-color: #0F385A;
        color: white;
        float: right;
    }    
</style>