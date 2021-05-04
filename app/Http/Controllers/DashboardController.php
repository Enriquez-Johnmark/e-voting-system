<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\VoteMale;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        // $results = DB::table('votes')
        // ->select('candidate_id',
        //         // 'candidates.id',
        //         // 'candidates.firstname',
        //         // 'candidates.lastname',
        //         DB::raw('count(votes.id) as votes_count'))
        // // ->join('candidates','candidates.id','=','candidate_id')
        // ->groupBy('candidate_id')
        // ->get();
        $results = Vote::select("candidate_id", DB::raw("count(votes.id) as votes_count"))
        ->groupBy('candidate_id')
        ->with('candidate')
        ->get();

        $maleres = VoteMale::select("male_id", DB::raw("count(votes_male.id) as votes_count"))
        ->groupBy('male_id')
        ->with('candidate')
        ->get();
        // dd($maleres);
       
        // $results = DB::table('votes')->count();
        // dd($results);
        // dd($results);
        return view('admin.dashboard' ,compact('results','maleres'));

    }
}
