<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    
    public function voter() 
     {
     	 return $this->belongsTo(User::class);
     }

    
     public function candidate() 
     {
     	 return $this->belongsTo(Candidate::class);
     }
}
