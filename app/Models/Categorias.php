<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
class User	extends Authenticatable
{
	use HasFactory,	Notifiable;
				//	...
				/**
					*	Get	the	posts	for	the	user.
					*/
	public function posts():	HasMany
		{
			return $this->hasMany(Post::class);
		}
}