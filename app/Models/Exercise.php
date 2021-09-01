<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $table = "exercise";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ex_ignore_r', 'ex_clasp_r', 'ex_pleats_r', 'ex_ignore_l', 'ex_clasp_l', 'ex_pleats_l','do_ignore_r', 'do_clasp_r', 'do_pleats_r', 'do_ignore_l', 'do_clasp_l', 'do_pleats_l','s_ignore_r', 's_clasp_r', 's_pleats_r', 's_ignore_l', 's_clasp_l', 's_pleats_l','comment', 'patient_id', 'doctor_id', 
    ];

  

}
