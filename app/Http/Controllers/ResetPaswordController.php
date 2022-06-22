<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;

class ResetPaswordController extends Controller
{
    //

    public function index($id){
        //return $id;
        return view('users.password.reset',compact('id'));
    }

    public function resetpasword(Request $request,$id){

        $request->validate([
            'passwordD'=>['required', Rules\Password::min(8)],
            'passwordC'=>['required', Rules\Password::min(8)],
        ]);
        if (strcmp($request->passwordD, $request->passwordC) === 0){
            $usrs = User::where('users.id','=',$id)
            ->update(['users.password' => bcrypt($request->input('passwordC'))] );
        
        return redirect()->route('users.index')->withSuccess('Se Actualizo correctamente la contraseña');

        }else{
            return redirect()->route('reset',$id)->withSuccess('Las contraseñas no son iguales Intentelo de nuevo');
        }

    }
}
