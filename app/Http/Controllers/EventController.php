<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use DateTime;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('can:editor_index')->only('index');
        $this->middleware('can:editor_show')->only('show');
        $this->middleware('can:editor_edit')->only('update','edit');
        $this->middleware('can:editor_destroy')->only('destroy');
    }
    
    public function index()
    {
        //
        $events = Event::paginate(5);
        return view('users.editor.events.index',compact('events'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.editor.events.create');
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
        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'start' => DateTime::createFromFormat('d/m/Y', strtoupper($request->start))->format('Y-m-d'),
            'end' => DateTime::createFromFormat('d/m/Y', strtoupper($request->end))->format('Y-m-d'),
        ]);
        
       
        return redirect()->route('events.index')
        ->withSuccess('Evento creado correctamente');
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
        $event = Event::find($id);
        return view('users.editor.events.edit',compact('event','id'));
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
        $usrs = Event::where('events.id','=',$id)
        ->update(['events.title' => $request->title , 'events.description' => $request->description
                 ,'events.start' => DateTime::createFromFormat('d/m/Y', strtoupper($request->start))->format('Y-m-d') 
                 ,'events.end' => DateTime::createFromFormat('d/m/Y', strtoupper($request->end))->format('Y-m-d')]);

        return redirect()->route('events.index')->withSuccess('Se Actualizo correctamente detalles del Evento');         
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
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('events.index')
        ->withSuccess('Evento Eliminado correctamente');

    }
}
