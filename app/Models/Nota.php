<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model
{
    use SoftDeletes;//o use serve para importar uma trait, um traço, trecho de programação, ele está herdando um pedacinho da classe
    //listagem de campos para inserção no banco
    protected $fillable = ['titulo','texto'];
}
