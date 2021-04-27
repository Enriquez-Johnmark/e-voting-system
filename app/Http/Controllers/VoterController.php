<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\ElectionTitle;
use App\Models\Candidate;
use App\Models\ElectionTitle;
use Illuminate\Support\Facades\DB;

class VoterController extends Controller
{
    public function index()
    {   
        return view('voters.dashboard');
    }

    public function showCandidate()
    {
        $allTitles = DB::table('election_title')
          ->get();
        $allCandidates = Candidate::get();
        return view('voters.listcandidates',compact('allCandidates', 'allTitles'));
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
