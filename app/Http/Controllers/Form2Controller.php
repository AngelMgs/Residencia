<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

//name REDDEAPOYOEINTITUCIONESEXTERNAS
class Form2Controller extends Controller
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
        $forms = Form::where('forms.name','=','REDDEAPOYOEINTITUCIONESEXTERNAS')->get();

        return view('users.form.IA.index', compact('forms'));            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form-pr7.create.F1-PR7');
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
        
        $frm = new Form();
        $frm->name = $name;
        $frm->info = json_encode($form);
        $frm->save();

        return redirect()->route('forms2.index')
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

        $count = count($info['hrp_dep']);
        $inf= array_merge( ['dependencia' => $info['hrp_dep'], 'direccion' =>$info['hrp_dir'], 'telefono' =>$info['hrp_tel']]);
        
        return view('form-pr7.index.F1-PR7',compact('inf','count'));
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

        $count = count($info['hrp_dep']);
        $inf= array_merge( ['dependencia' => $info['hrp_dep'], 'direccion' =>$info['hrp_dir'], 'telefono' =>$info['hrp_tel']]);

        return view('form-pr7.edit.F1-PR7',compact('inf','count','id'));
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

        return redirect()->route('forms2.index')
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

        return redirect()->route('forms2.index')
        ->withSuccess('Formato Eliminado correctamente');

    }
}
