<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species_id',
        'born_date',
        'human_name',
        'description',
        'photo'
    ];

    public function species(){
        return $this->belongsTo(species::class,'species_id');
    }
}
