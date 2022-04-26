<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciutat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function casals()
    {
        return $this->hasOne(Casal::class);
    }

}
