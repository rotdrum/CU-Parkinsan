<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = "game";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lavel', 'type', 'timer', 'lowvalue','highvalue','do_lowvalue','do_highvalue','status', 'user_id' ,
    ];

    public function user(){
        return $this->belongsTo("App\Models\User", "user_id", "id");
    }

}
