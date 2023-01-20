<?php

namespace App\Models;

use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiquette extends Model
{
    use HasFactory;

    protected $table = 'etiquette';
    protected $primaryKey = 'id';

    public function plats ()
    {
        return $this->belongsToMany(Plat::class);
    }
}