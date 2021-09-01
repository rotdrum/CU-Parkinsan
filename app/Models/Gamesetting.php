<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gamesetting extends Model
{
    protected $table = "gramsetting";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lavel', 'type', 'timer',
    ];

  

}
