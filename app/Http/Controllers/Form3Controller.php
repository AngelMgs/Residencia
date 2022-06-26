<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class Form3Controller extends Controller
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

    public function index()
    {
        //
        $forms = Form::whereBetween('forms.name', ['ACTAESCOLAR','SOLICITUDDEREQUERIMIENTO','ACTAESCOLAR'])->get();
        return view('users.form.AE.index', compact('forms'));            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        if($request->fm_pr7 == 'AE'){
            $ruta = 'form-pr7.create.F2-PR7';

        }elseif($request->fm_pr7 == 'SE'){
            $ruta = 'form-pr7.create.F3-PR7';

        }elseif($request->fm_pr7 == 'CN'){
            $ruta = 'form-pr7.create.F4-PR7';
        }

        return view($ruta);

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
        $form = array_splice($form ,2);
        //return $form;
        
        $frm = new Form();
        $frm->name = $name;
        $frm->info = json_encode($form);
        $frm->save();

        return redirect()->route('forms3.index')
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

        if($name == 'ACTAESCOLAR'){
            $ruta = 'form-pr7.index.F2-PR7';

        }elseif($name == 'SOLICITUDDEREQUERIMIENTO'){
            $ruta = 'form-pr7.index.F3-PR7';

        }elseif($name == 'CANALIZACION'){
            $ruta = 'form-pr7.index.F4-PR7';
        }

        
        return view($ruta,compact('info','id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $form = Form::find($id);

        $info = $form->info;
        $name = $form->name;
        $info = json_decode($info,true);

        if($name == 'ACTAESCOLAR'){
            $ruta = 'form-pr7.edit.F2-PR7';

        }elseif($name == 'SOLICITUDDEREQUERIMIENTO'){
            $ruta = 'form-pr7.edit.F3-PR7';

        }elseif($name == 'CANALIZACION'){
            $ruta = 'form-pr7.edit.F4-PR7';
        }

        
        return view($ruta,compact('info','id'));
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
        $form = $request->all();
        $form = array_splice($form ,2);
        $info = json_encode($form);

        //return $info;
        $form = Form::where('id','=',$id)->update(['info' =>  $info]);

        return redirect()->route('forms3.index')
        ->withSuccess('Formato Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $frm = Form::find($id);
        $frm->delete();

        return redirect()->route('forms3.index')
        ->withSuccess('Formato Eliminado correctamente');

    }
}
