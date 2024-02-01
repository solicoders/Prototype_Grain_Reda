<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Models extends Model
{
    use HasFactory;

    protected $fillable = [
        'Model_Name',
        'Model_Year',
        'cars_id',
        'Reference',
        'remember_token'
    ];

    public function car(): HasMany
    {
        return $this->HasMany(Models::class);
    }
}
