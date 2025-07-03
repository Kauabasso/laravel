<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
class Categoria extends Model
{
	use HasFactory,	Notifiable;
				//	...
				/**
					*	Get	the	posts	for	the	user.
					*/
	public function produtos():	HasMany
	{
		return $this->hasMany(Produto::class);
	}
}