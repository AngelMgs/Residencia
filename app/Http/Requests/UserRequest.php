<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre'=>'required|min:3|max:30',
            'apellido_p'=>'required|min:4|max:15',
            'apellido_m'=>'required|min:4|max:15',
            'telefono'=>'required|min:10|max:10',
            'direccion'=>'required|min:5|max:50',

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ];


    }

    public function messages()
    {
        return [
        'name.required' => 'El Nombre es Requerido',
        'apellido_p.required' => 'El Apellido Paterno es Requerido',
        'apellido_m.required' => 'El Apellido Materno es Requerido',
        'telefono.required' => 'El Telefono es Requerido',
        'telefono.required' => 'La direccion es Requerido',

        'email'=> 'Matricula No valida',

        ];
    }
}
