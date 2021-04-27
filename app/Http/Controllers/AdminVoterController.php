<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminVoterController extends Controller
{
    public function index()
    {  
       
      $allVoters = DB::table('users')
          ->where('role', '=', 2)
          ->get();
        return view('admin.voter.index',compact('allVoters'));
    }

}
