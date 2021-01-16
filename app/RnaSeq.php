<?php

namespace app; 

use Illuminate\Database\Eloquent\Model;

class RnaSeq extends Model 
{
    protected $fillable = [
        'seq_region_id', 'name', 'coord_system_id', 'length'
    ];

    protected $hidden = [];
}