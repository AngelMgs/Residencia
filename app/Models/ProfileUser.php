<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    use HasFactory;

    protected $fillable = [
            'nombre',
            'apellido_p',
            'apellido_m',
            'telefono',
            'direccion',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
