<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('can:form_index')->only('index');
        $this->middleware('can:form_show')->only('show');
        $this->middleware('can:form_edit')->only('update','edit');
        $this->middleware('can:form_destroy')->only('destroy');
    }

    public function index(Request $request )
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $record_id = $request->record_id;
        if($request->fm_pr7 == 'HRP'){
            $ruta = 'form-pr7.create.HRP-PR7';

        }elseif($request->fm_pr7 == 'HD1'){
            $ruta = 'form-pr7.create.HDD0-PR7';

        }elseif($request->fm_pr7 == 'HD2'){
            $ruta = 'form-pr7.create.HDD1-PR7';
        }elseif($request->fm_pr7 == 'HC1'){

            $ruta = 'form-pr7.create.HC0-PR7';

        }elseif($request->fm_pr7 == 'HC2'){
            $ruta = 'form-pr7.create.HC1-PR7';
        }
        
        return view($ruta,compact('record_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $form = $request->all();
        $name = $request->name;
        $id  = $request->record_id;
        
        $form = array_splice($form ,3);
        //return $form;
        

        $frm = new Form();
        $frm->name = $name;
        $frm->info = json_encode($form);
        $frm->save();

        $id_form = Form::latest()->first()->id;

        DB::table('record_has_forms')->insert([
            ['record_id' => $id, 'form_id' => $id_form]
        ]);

        return redirect()->route('records.show',$id)
        ->withSuccess('Formato creado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $form = Form::find($id);

        $info = $form->info;
        $name = $form->name;
        $info = json_decode($info,true);

        if($name == 'HojaDelDiario1'){
            $ruta = 'form-pr7.index.HDD0-PR7';

        }elseif($name == 'HojaDelDiario2'){
            $ruta = 'form-pr7.index.HDD1-PR7';

        }elseif($name == 'HojaDeRegitroPersonal'){
            $ruta = 'form-pr7.index.HRP-PR7';
        }elseif($name  == 'HISTORIALCLINICO'){
            $inf = array_merge( ['nombre' => $info['hrp_miem'], 'parentesco' =>$info['hrp_paren'], 'edad' =>$info['hrp_eda'], 'escolarida' =>$info['hrp_escol'], 'ocupacion' =>$info['hrp_ocup']]);
            return view('form-pr7.index.HC0-PR7',compact('info','inf'));
        }elseif($name  == 'EVALUCACIONPSICOLOGICA'){
           
        }
        return view($ruta,compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        //
        $record_id = $request->record_id;
        $form = Form::find($id);

        $info = $form->info;
        $name = $form->name;
        $info = json_decode($info,true);
        
        if($name == 'HojaDelDiario1'){
            $ruta = 'form-pr7.edit.HDD0-PR7';

        }elseif($name == 'HojaDelDiario2'){
            $ruta = 'form-pr7.edit.HDD1-PR7';

        }elseif($name == 'HojaDeRegitroPersonal'){
            $ruta = 'form-pr7.edit.HRP-PR7';

        }elseif($name  == 'HISTORIALCLINICO'){
            $inf = array_merge( ['nombre' => $info['hrp_miem'], 'parentesco' =>$info['hrp_paren'], 'edad' =>$info['hrp_eda'], 'escolarida' =>$info['hrp_escol'], 'ocupacion' =>$info['hrp_ocup']]);
            return view('form-pr7.edit.HC0-PR7',compact('info','record_id','id','inf'));
            
        }elseif($name  == 'EVALUCACIONPSICOLOGICA'){
            $ruta = 'form-pr7.edit.HC1-PR7';
        }
        return view($ruta,compact('info','record_id','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $record_id  = $request->record_id;
        $form = $request->all();
        $form = array_splice($form ,2);
        $info = json_encode($form);

        //return $info;

        $form = Form::where('id','=',$id)->update(['info' =>  $info]);
        
        return redirect()->route('records.show',$record_id)
        ->withSuccess('Formato Actualizado correctamente');
        //return $record_id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        //;
        $frm = Form::find($id);
        $frm->delete();

        
        $id = $request->record_id;

        return redirect()->route('records.show',$id)
        ->withSuccess('Formato Eliminado correctamente');
    }
}
