<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('can:files_index')->only('index');
        $this->middleware('can:files_show')->only('show');
        $this->middleware('can:files_edit')->only('update','edit');
        $this->middleware('can:files_destroy')->only('destroy');
    }
    
    public function index()
    {
        //
        $files = File::paginate(3);
        //return $files;
        return view('users.files.index',compact('files'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.files.create');
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
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);

        $img = $request->file('file')->store('public/');
        $url = Storage::url($img);

        
        File::create([
            'url' => $url
        ]);

        return redirect()->route('files.index')
        ->withSuccess('Imagen Agregada Correctamente');

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
    public function destroy(File $file)
    {
        //
        $url = str_replace('storage','public',$file->url);
        Storage::delete($url);

        $file->delete();

        return redirect()->route('files.index')
        ->withSuccess('Imagen Eliminada Correctamente');
    }

    

    
}
