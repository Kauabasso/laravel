<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class voos extends Model
{
    protected $fillable = ['origem','destino','data','companhia','numero_voo','preco'];
}
