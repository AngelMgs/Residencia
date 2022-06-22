<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProfileUser;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;

use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function __construct(){
        $this->middleware('can:user_edit')->only('update','edit');
        $this->middleware('can:user_destroy')->only('destroy');
    }
    public function index()
    {
        //
        $users = User::paginate(5);
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all()->pluck('name', 'id');
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password'=>['required', Rules\Password::min(8)],
        ]);
        
        $user = User::create($request->only('email')
            + ['password' => bcrypt($request->input('password')), ]);

        $usr = new ProfileUser();
        
        $usr->nombre = $request->nombre;
        $usr->apellido_p = $request->apellido_p;
        $usr->apellido_m = $request->apellido_m;
        $usr->telefono = $request->telefono;
        $usr->direccion = $request->direccion;
        $usr->user_id  = $user->id;
        
        $usr->save();

        $roles = $request->input('roles', []);
        $user->syncRoles($roles);


        return redirect()->route('users.index')
        ->withSuccess('Usuario creado correctamente');

        //print_r($request->only('nombre', 'apellido_p', 'apellido_m' , 'telefono' ,  'direccion'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $usrs = User::join('profile_users','profile_users.user_id','=','users.id')
        ->select('users.id','users.email','profile_users.*',)
        ->where('profile_users.user_id','=',$id)
        ->get();


        //print_r($usrs);
        return view('users.show',compact('usrs','id'));
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
        $usrs = User::join('profile_users','profile_users.user_id','=','users.id')
        ->select('users.email','profile_users.*',)
        ->where('profile_users.user_id','=',$id)
        ->get();
        return view('users.edit',compact('usrs','id'));
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
        $usrs = User::join('profile_users','profile_users.user_id','=','users.id')
        ->select('users.email','profile_users.*',)
        ->where('profile_users.user_id','=',$id)
        ->update(['users.email' => $request->email , 'profile_users.nombre' => $request->nombre
                 ,'profile_users.apellido_p' => $request->apellido_p ,'profile_users.apellido_m' => $request->apellido_m
                 ,'profile_users.telefono' => $request->telefono, 'profile_users.direccion' => $request->direccion]);
        
        return redirect()->route('users.index')->withSuccess('Se Actualizo correctamente la Informacion');

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
        $usr = User::find($id);
        $usr->delete();

        return redirect()->route('users.index')
        ->withSuccess('Usuario Eliminado correctamente');

    }

    public function validation(Request $request){

        $bl = ((bool) Page::where('email','=',$request->input('email'))->value('email'));

        if ($bl) {
            return response()->json(['success'=>'Correo se Encuentra Registrado']);
        }
        if (!$bl) {
            return response()->json(['success'=>'Correo se Encuentra Registrado']);
        }
    }
}
