<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class Textos extends Controller
{
    public function generardoc($quien)
    {
        try {
            $quien = Crypt::decrypt($quien);
            $texto = DB::table('textos')->where('id', $quien)->first();

            // Verificar si se encontraron resultados
            if (!$texto) {
                return redirect()->back()->with('error', 'No se encontró el texto especificado.');
            }

            $phpWord = new \PhpOffice\PhpWord\PhpWord();
            $section = $phpWord->addSection();

            // Estilo de fuente
            $fontStyle = array(
                'name' => 'Times New Roman',
                'size' => 12,
            );

            // Estilo de párrafo
            $paragraphStyle = array(
                'alignment' => 'both', // Alineación justificada
                'spaceAfter' => 120,
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

            // Añadir título del documento
            $section->addText($titulo, $titleStyle);

            // Agregar texto al documento con estilos
            $section->addText($asignatura, $fontStyle, $paragraphStyle);
            $section->addText($docente, $fontStyle, $paragraphStyle);
            $section->addText($titulo, $fontStyle, $paragraphStyle);
            $section->addText($pclave, $fontStyle, $paragraphStyle);

            // Añadir resumen con estilo cursiva
            $italicStyle = array(
                'italic' => true,
            );
            $section->addText('RESUMEN', $titleStyle);
            $section->addText($resumen, $fontStyle, $italicStyle);

            // Añadir secciones principales con numeración
            $section->addText('1. INTRODUCCIÓN', $titleStyle);
            $section->addText($introduccion, $fontStyle, $paragraphStyle);
            $section->addText('2. DESARROLLO', $titleStyle);
            $section->addText($desarrollo, $fontStyle, $paragraphStyle);
            $section->addText('3. CONCLUSIÓN', $titleStyle);
            $section->addText($conclusion, $fontStyle, $paragraphStyle);

            // Guardar el documento
            $filename = $titulo . '.docx';
            $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
            $objWriter->save(storage_path($filename));

            // Descargar el documento
            return response()->download(storage_path($filename))->deleteFileAfterSend(true);
        } catch (\Exception $e) {
            // Manejo de excepciones: puedes imprimir o registrar el mensaje de error.
            return redirect()->back()->with('error', 'Error al generar el documento: ' . $e->getMessage());
        }
    }
}
