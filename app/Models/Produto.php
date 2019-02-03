<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

	public $timestamps = false;
	
    protected $fillable = [
    'produto', 'quantidade', 'preço', 'updated_at'
    ];
}
