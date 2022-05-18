<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Form;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'folio',
    ];

    public function form()
    {
        return $this->belongsToMany(Form::class);
    }
}
