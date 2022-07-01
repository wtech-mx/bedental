<?php

namespace App\Http\Controllers;

use App\Models\Alertas;
use App\Models\Client;
use App\Models\Colores;
use App\Models\Especialist;
use App\Models\Controlpagos;
use App\Models\Factura;
use Illuminate\Http\Request;
use Session;
use DB;

class ControlpagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alertas = Alertas::orderBy('id', 'desc')->get();
        $client = Client::orderBy('nombre', 'asc')->get();
        $controlpagos = Controlpagos::orderBy('fecha', 'asc')->get();

        $graficacontrol = Controlpagos::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('fecha', date('Y'))
                    ->groupBy(\DB::raw("Month(fecha)"))
                    ->pluck('count');

        return view('controlpagos.index', compact('alertas', 'client', 'controlpagos', 'graficacontrol'));
    }


    public function update($id, Request $request)
    {
         $controlpagos = Controlpagos::findorfail($id);

        $costo_total = $request->get('costo_total');
        $pagado = $request->get('pagado');
        $saldo_pendiente = $request->get('saldo_pendiente');

        $controlpagos->costo_total = $costo_total;
        $controlpagos->pagado = $pagado;
        $controlpagos->saldo_pendiente = $saldo_pendiente;
        $controlpagos->factura = $request->get('factura');

        if($controlpagos->factura == 'Si'){
            $facturas = new Factura();
            $facturas->id_clients = $controlpagos->id;
            $facturas->date = $controlpagos->fecha;
            $facturas->name = $controlpagos->Colores->servicio;
            $facturas->estatus = 0;
            $facturas->save();
        }

        if ($request->signed != null){
            $folderPath = public_path('upload/');
            $image_parts = explode(";base64,", $request->signed);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file = $folderPath . uniqid() . '.'.$image_type;
            $nombre_archivo = pathinfo($file, PATHINFO_FILENAME);
            $controlpagos->firma_doctor = $nombre_archivo;
            file_put_contents($file, $image_base64);
        }


        if ($request->signed2 != null) {
            $folderPath2 = public_path('upload/');
            $image_parts2 = explode(";base64,", $request->signed2);
            $image_type_aux2 = explode("image/", $image_parts2[0]);
            $image_type2 = $image_type_aux2[1];
            $image_base642 = base64_decode($image_parts2[1]);
            $file2 = $folderPath2 . uniqid() . '.' . $image_type2;
            $nombre_archivo2 = pathinfo($file2, PATHINFO_FILENAME);
            $controlpagos->firma_paciente = $nombre_archivo2;
            file_put_contents($file2, $image_base642);
        }

        $controlpagos->update();
        Session::flash('edit', 'Se ha editado  con exito');
        return redirect()->back();
    }

}


