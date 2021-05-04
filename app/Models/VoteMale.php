<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteMale extends Model
{
    use HasFactory;
    
    protected $table = 'votes_male';

    public function voter() 
    {
         return $this->belongsTo(User::class);
    }

   
    public function candidate() 
    {
         return $this->belongsTo(Candidate::class, 'male_id');
    }
}
