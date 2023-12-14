<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    protected $table = 'lamarans' ;
    protected $guarded = [];
    protected $primaryKey = 'id_lamaran';

    function alumni(){
        return $this->belongsTo(Alumni::class, 'nisn');
    }

    function lowongan(){
        return $this->BelongsTo(Lowongan::class, 'id_lowongan');
    }
}
