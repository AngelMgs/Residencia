<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Record;
use App\Models\Form;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('can:record_index')->only('index');
        $this->middleware('can:record_show')->only('show');
        $this->middleware('can:record_edit')->only('update','edit');
        $this->middleware('can:record_destroy')->only('destroy');
    }
    public function index()
    {
        //
        $records = Record::paginate(5);
        return view('users.record.index',compact('records'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.record.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|unique:records',
        ]);

        $folio = uniqid();
        //
        $rcd = new Record();
        $rcd->name = $request->name;
        $rcd->folio = $folio;

        $rcd->save();

        return redirect()->route('records.index')
        ->withSuccess('Expediente creado correctamente');
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
        $forms = Record::join('record_has_forms','record_has_forms.record_id','=','records.id')
        ->join('forms','record_has_forms.form_id','=','forms.id')
        ->where('record_has_forms.record_id','=',$id)
        ->select('forms.*')
        ->get();
        
        $info = Record::find($id);
        $name = $info->name;

 
        return view('users.form.index',compact('forms','name','id'));
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
        $records = Record::find($id);
        return view('users.record.edit',compact('records','id'));

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
        $records = Record::where('id','=',$id)->update(['name' => $request->nombre]);
        return redirect()->route('records.index')->withSuccess('Se Actualizo correctamente El nombre');
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
        $rs = DB::table('forms')
        ->join('record_has_forms','forms.id','=','record_has_forms.form_id')
        ->where('record_id','=',$id)->delete();

        $rcd = Record::find($id);
        $rcd->delete();

        return redirect()->route('records.index')
        ->withSuccess('Expediente Eliminado correctamente');

    }
}
