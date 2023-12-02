<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\SimpleType\TextAlignment;

class Textos extends Controller
{
    public function nuevotexto() {
        return view('nuevotexto');
    }

    public function editartexto($quien) {
        $quien = Crypt::decrypt($quien);
        $texto = DB::table('textos')->where('id', $quien)->get();           
        return view("editartexto", compact('texto'));               
    }

    public function guardar(){
        DB::table('textos')->insert([
            'usuario' => auth()->user()->id,
            'asignatura' => request()->asignatura,
            'docente' => request()->docente,
            'titulo' => request()->titulo,
            'pclave' => request()->pclave,
            'lluviaideas' => request()->lluviaideasimg,
            'resumen' => request()->resumen,
            'introduccion' => request()->introduccion,
            'desarrollo' => request()->desarrollo,            
            'conclusion' => request()->conclusion,
            'progreso' => request()->contador
        ]);        
        return redirect()->to('/');
    }

    public function editar($quien){
        $quien = Crypt::decrypt($quien);             
        DB::table('textos')->where('id', $quien)->update([
            'usuario' => auth()->user()->id,
            'asignatura' => request()->asignatura,
            'docente' => request()->docente,
            'titulo' => request()->titulo,
            'pclave' => request()->pclave,
            'lluviaideas' => request()->lluviaideasimg,
            'resumen' => request()->resumen,
            'introduccion' => request()->introduccion,
            'desarrollo' => request()->desarrollo,            
            'conclusion' => request()->conclusion,
            'progreso' => request()->contador
        ]);        
        return redirect()->to('/');
    }

    public function generardoc($quien)
    {
        try {
            $quien = Crypt::decrypt($quien);
            $texto = DB::table('textos')->where('id', $quien)->first();

            if (!$texto) {
                return redirect()->back()->with('error', 'No se encontró el texto especificado.');
            }

            $phpWord = new \PhpOffice\PhpWord\PhpWord();
            $portadaSection = $phpWord->addSection();
            $section = $phpWord->addSection();

            $portadaStyle = array(
                'name' => 'Times New Roman',
                'size' => 12,
                'alignment' => 'center',
            );

            // Estilo de fuente
            $fontStyle = array(
                'name' => 'Times New Roman',
                'size' => 12,
            );

            // Estilo de párrafo
            $paragrahStyle = array(
                'alignment' => 'left', // Alineación izquierda
                'spaceAfter' => 120,
                'indentation' => array('firstLine' => 720), // Sangría de 1.27 cm
            );

            // Título del documento
            $titleStyle = array(
                'name' => 'Times New Roman',
                'size' => 14,
                'bold' => true,
            );

            // Obtener los datos del texto
            $asignatura = $texto->asignatura;
            $docente = $texto->docente;
            $titulo = $texto->titulo;
            $pclave = $texto->pclave;
            $resumen = $texto->resumen;
            $introduccion = $texto->introduccion;
            $desarrollo = $texto->desarrollo;
            $conclusion = $texto->conclusion;

            // PORTADA
            $portadaSection->addText($titulo, $titleStyle);

            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();

            $portadaSection->addText('Aqui va su nombre', $portadaStyle);
            
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();

            $portadaSection->addText($asignatura, $portadaStyle);
            $portadaSection->addText($docente, $portadaStyle);

            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();
            $portadaSection->addTextBreak();

            $portadaSection->addText('Instituto Universitario Politécnico Grancolombiano', $portadaStyle);

            // FECHA PORTADA
            $fechaActual = new \DateTime();
            $textRun = $portadaSection->addText($fechaActual->format('M - Y'), $portadaStyle);

            // PALABRAS CLAVE
            $section->addText('PALABRAS CLAVE',$titleStyle);
            $section->addText($pclave, $fontStyle, $paragrahStyle);

            // RESUMEN
            $section->addText('RESUMEN', $titleStyle);
            $section->addText($resumen, $fontStyle, $paragrahStyle);

            // INTRODUCCION
            $section->addText('INTRODUCCIÓN', $titleStyle);
            $section->addText($introduccion, $fontStyle, $paragrahStyle);

            // DESARROLLO
            $section->addText('DESARROLLO', $titleStyle);
            $section->addText($desarrollo, $fontStyle, $paragrahStyle);

            // CONCLUSION
            $section->addText('CONCLUSIÓN', $titleStyle);
            $section->addText($conclusion, $fontStyle, $paragrahStyle);



            // GUARDADO DE DOCUMENTO
            $filename = $titulo . '.docx';
            $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
            $objWriter->save(storage_path($filename));

            // DESCARGA
            return response()->download(storage_path($filename))->deleteFileAfterSend(true);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al generar el documento: ' . $e->getMessage());
        }

        
    }

    public function eliminartexto($quien){
        $quien = Crypt::decrypt($quien); 
        DB::table('textos')->where('id',$quien)->delete();
        return redirect()->to('/');
    }

}
