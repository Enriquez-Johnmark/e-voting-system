<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $results = DB::table('votes')
        ->select('candidate_id',
                'candidates.id',
                'candidates.firstname',
                'candidates.lastname',
                DB::raw('count(votes.id) as votes_count, candidate_id'))
        ->join('candidates','candidates.id','=','candidate_id')
        ->groupBy('candidate_id')
        ->get();
        // dd($results);
        // $results = DB::table('votes')->count();
        // dd($results);
        // dd($results);
        return view('admin.dashboard' ,compact('results'));

    }
}
