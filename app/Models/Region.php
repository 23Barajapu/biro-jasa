<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name', 'base_price'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
