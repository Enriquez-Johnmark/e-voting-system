<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vote;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class VoteController extends Controller
{
    
    
    public function store(Request $request)
    {
      if($request->isMethod('post')){
        $data = $request->all();
        
        $vote = new Vote;
        $vote->voter_id            = Auth::user()->id;
        $vote->candidate_id        = $data['candidate_id'];

        $vote->save();
        return redirect()->back()->with('success', 'Candidate has been added successfully'); 
    }  
    }

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
