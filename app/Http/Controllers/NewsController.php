<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\File;

class NewsController extends Controller
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
        $news = Notice::paginate(5);
        return view('users.editor.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $files = File::paginate(3);
        return view('users.editor.news.create',compact('files'));
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
        $file = File::find($request->img_url);

        Notice::create([
            'title' => $request->title,
            'body' => $request->body,
            'img_url' => $file->url,
            'link_name' => $request->link_name,
            'link_url' => $request->link_url,
        ]);
        
       
        return redirect()->route('news.index')
        ->withSuccess('Anuncio creado correctamente');
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
        $event = Notice::find($id);
        $event->delete();

        return redirect()->route('news.index')
        ->withSuccess('Noticia Eliminado correctamente');
    }
}
