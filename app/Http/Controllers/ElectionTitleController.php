<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectionTitle;

class ElectionTitleController extends Controller
{
    public function index()
    {   
        $allTitles = ElectionTitle::latest()->get();
        return view('admin.electiontitle.index',compact('allTitles'));
    }

    public function create()
    {
        return view('admin.electiontitle.create');
    }

    public function store(Request $request)
    {
        ElectionTitle::create($request->all());
        return redirect()->back()->with('success', 'Data has been added successfully'); 
    }

    public function edit(Request $request)
    {
        $electionTitle = ElectionTitle::findOrFail($request->id);
        return view('admin.electiontitle.edit', compact('electionTitle'));
    }

    public function update(Request $request, ElectionTitle $electionTitle)
    {
        $data = $request->all();

        $electionTitle = ElectionTitle::findOrFail($request->id);
        $electionTitle->name = $data['name'];
        $electionTitle->save();
        return redirect('/title')->with('success', 'Data has been Updated successfully'); 
    }

}
