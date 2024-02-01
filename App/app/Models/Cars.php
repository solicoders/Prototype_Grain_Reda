<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'Car_Name',
        'Car_Color',
        'Reference',
        'remember_token'
    ];

    public function models()
    {
        return $this->hasMany(Models::class);
    }
}
