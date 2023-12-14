<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $table = 'testimoni';
    protected $guarded = [];
    protected $primaryKey = 'id_testimoni';

    function alumni(){
      return $this->belongsTo(Alumni::class, 'nisn');
    }
}
