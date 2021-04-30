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
                DB::raw('count(votes.id) as votes_count'))
        ->join('candidates','candidates.id','=','votes.candidate_id')
        ->groupBy('candidate_id')
        ->get();
        // dd($results);
        return view('admin.dashboard' ,compact('results'));
    }
}
