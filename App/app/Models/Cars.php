<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillables = [ 
        'Car_Name',
        'Car_Color',
        'Model_Id',
        'Reference'
    ];
}
