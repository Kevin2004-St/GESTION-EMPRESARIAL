<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    //Metodo pdf clientes
    public function clientes(Request $request){

        set_time_limit(0);

        // Obtener la fecha de proceso (por ejemplo, la fecha actual)
        $fechaProceso = date('Y-m-d');

        // Obtener los datos para el PDF
        $entities = Cliente::orderBy('id')->get();

        // Pasar los datos a la vista
        $pdfView = view('web.pdf.clientes.index', compact('entities', 'fechaProceso'));

        // Generar el PDF
        $pdf = \PDF::loadHtml($pdfView->render());
        $pdf->setPaper('letter', 'portrait');


        //Mostrar el PDF y el usuario decide si descargar
        return $pdf->stream('Listado_de_clientes.pdf');


        // Descargar el PDF directamente 
       // return $pdf->download('Listado_de_clientes.pdf');

    }


    //Metodo pdf productos
    public function productos(Request $request){

        set_time_limit(0);
    
        // Obtener la fecha de proceso (por ejemplo, la fecha actual)
        $fechaProceso = date('Y-m-d');
    
        // Obtener los datos para el PDF
        $entities = Producto::orderBy('id')->get();
    
        // Pasar los datos a la vista
        $pdfView = view('web.pdf.productos.index', compact('entities', 'fechaProceso'));
    
        // Generar el PDF
        $pdf = \PDF::loadHtml($pdfView->render());
        $pdf->setPaper('letter', 'portrait');
    
    
        //Mostrar el PDF y el usuario decide si descargar
        return $pdf->stream('Listado_de_produtos.pdf');
    
    
        // Descargar el PDF directamente 
        // return $pdf->download('Listado_de_clientes.pdf');
    
    }

    //Metodo pdf categorias
    public function categorias(Request $request){

        set_time_limit(0);
    
        // Obtener la fecha de proceso (por ejemplo, la fecha actual)
        $fechaProceso = date('Y-m-d');
    
        // Obtener los datos para el PDF
        $entities = Categorias::orderBy('id')->get();
    
        // Pasar los datos a la vista
        $pdfView = view('web.pdf.categorias.index', compact('entities', 'fechaProceso'));
    
        // Generar el PDF
        $pdf = \PDF::loadHtml($pdfView->render());
        $pdf->setPaper('letter', 'portrait');
    
    
        //Mostrar el PDF y el usuario decide si descargar
        return $pdf->stream('Listado_de_categorias.pdf');
    
        // Descargar el PDF directamente 
        // return $pdf->download('Listado_de_clientes.pdf');
    
    }

    //Metodo pdf proveedores
    public function proveedores(Request $request){

        set_time_limit(0);
    
        // Obtener la fecha de proceso (por ejemplo, la fecha actual)
        $fechaProceso = date('Y-m-d');
    
        // Obtener los datos para el PDF
        $entities = Proveedor::orderBy('id')->get();
    
        // Pasar los datos a la vista
        $pdfView = view('web.pdf.proveedores.index', compact('entities', 'fechaProceso'));
    
        // Generar el PDF
        $pdf = \PDF::loadHtml($pdfView->render());
        $pdf->setPaper('letter', 'portrait');
    
    
        //Mostrar el PDF y el usuario decide si descargar
        return $pdf->stream('Listado_de_proveedores.pdf');
    
        // Descargar el PDF directamente 
        // return $pdf->download('Listado_de_clientes.pdf');
    
    }
}
