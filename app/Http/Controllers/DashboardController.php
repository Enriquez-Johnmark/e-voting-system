<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $results = DB::table('votes')
        ->select('votes.candidate_id',
                'candidates.id',
                'candidates.firstname',
                'candidates.lastname',
                'candidates.date_of_birth',
                'candidates.category',
                'candidates.image',
                'candidates.grade_section',
                DB::raw('count(votes.id) as votes_count'))
        ->join('candidates','candidates.id','=','votes.candidate_id')
        ->groupBy('votes.candidate_id')
        ->get();
        return view('admin.dashboard' ,compact('results'));
    }
}
