<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\ElectionTitle;
use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class VoterController extends Controller
{
    public function index()
    {   
        // $votes = Vote::with('voter')->get();

        $votes = Vote::with('voter')->where('voter_id', '=', Auth::user()->id)->get(); 

        return view('voters.dashboard', compact('votes'));
  
    }

    public function showCandidate()
    {
        
        $allTitles = DB::table('election_title')
          ->get();

        $allTerms = DB::table('terms')
        ->get();

        // $allCandidates = Candidate::get();

        $allFemales = DB::table('candidates')
            ->where('category','female')
            ->get();

        $allMales = DB::table('candidates')
            ->where('category','male')
            ->get();

        // dd($allTitles);
        return view('voters.listcandidates',compact('allFemales', 'allMales', 'allTitles','allTerms'));
    }

    // public function store(Request $request)
    // {
    //     ElectionTitle::create($request->all());
    //     return redirect()->back()->with('success', 'Data has been added successfully'); 
    // }

    // public function edit(Request $request)
    // {
    //     $electionTitle = ElectionTitle::findOrFail($request->id);
    //     return view('admin.electiontitle.edit', compact('electionTitle'));
    // }

    // public function update(Request $request, ElectionTitle $electionTitle)
    // {
    //     $data = $request->all();

    //     $electionTitle = ElectionTitle::findOrFail($request->id);
    //     $electionTitle->name = $data['name'];
    //     $electionTitle->save();
    //     return redirect('/title')->with('success', 'Data has been Updated successfully'); 
    // }

}
