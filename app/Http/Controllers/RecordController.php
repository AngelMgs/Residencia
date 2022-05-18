<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;

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
        $folio = uniqid();
        //
        $rcd = new Record();
        $rcd->name = $request->nombre;
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
        $rcd = Record::find($id);
        $rcd->delete();

        return redirect()->route('records.index')
        ->withSuccess('Expediente Eliminado correctamente');

    }
}
