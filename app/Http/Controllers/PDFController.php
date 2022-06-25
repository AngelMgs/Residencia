<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Barryvdh\DomPDF\Facade as PDF; 

class PDFController extends Controller
{
    //
    /*public function generatepdf($id){
        $frm = Form::find($id);
        if ($frm->name != 'REDDEAPOYOEINTITUCIONESEXTERNAS'){
            if ($frm->name != 'ACTAESCOLAR'){
            return redirect()->route('forms.show',$id)->withSuccess('Presione con el teclado CTRL + p para imprimir pdf');
            }else{
                return redirect()->route('forms3.show',$id)->withSuccess('Presione con el teclado CTRL + p para imprimir pdf');   
            }    

        }else{
            return redirect()->route('forms2.show',$id)->withSuccess('Presione con el teclado CTRL + p para imprimir pdf');   
        }
            
    }*/
    public function generatepdf($id){
        $frm = Form::find($id);
        $name = $frm->name;
        $info = $frm->info;
        $info = json_decode($info,true);

        if($name == 'HojaDelDiario1'){
            $ruta = 'form-pr7.pdf.HDD0-PR7';

        }elseif($name == 'HojaDelDiario2'){
            $ruta = 'form-pr7.pdf.HDD1-PR7';

        }elseif($name == 'HojaDeRegitroPersonal'){
            $ruta = 'form-pr7.pdf.HRP-PR7';
        }elseif($name == 'ACTAESCOLAR'){
            $ruta = 'form-pr7.pdf.F2-PR7';

        }elseif($name == 'REDDEAPOYOEINTITUCIONESEXTERNAS'){
            $ruta = 'form-pr7.pdf.F1-PR7';
        }

        //return $info;
        $pdf = PDF::loadView($ruta, compact('info'));
        return $pdf->download($name.'.pdf');
    }


}
