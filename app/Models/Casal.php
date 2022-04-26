<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ciutat()
    {
        return $this->belongsTo(Ciutat::class, 'id_ciutat');
    }

}
