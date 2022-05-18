<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Record;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'info',
    ];

    public function record()
    {
        return $this->belongsToMany(Record::class);
    }
}
