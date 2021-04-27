<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionTitle extends Model
{
    use HasFactory;
    
    protected $table = 'election_title';

    protected $fillable = [
        'name',  
    ];
    protected $guarded = []; 
}
