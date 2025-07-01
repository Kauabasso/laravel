<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nome',
        'preco',
        'descricao',
        'imagem',
        'categoria_id'
    ];
    public function produto(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}



