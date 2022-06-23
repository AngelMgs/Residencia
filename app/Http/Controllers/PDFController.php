<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class PDFController extends Controller
{
    //
    public function generatepdf($id){
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
            
    }
}
