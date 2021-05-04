<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;

class TermController extends Controller
{
    public function index()
    {   
        $allTerms = Term::latest()->get();
        return view('admin.term.index',compact('allTerms'));
    }

    public function create()
    {
        return view('admin.term.create');
    }

    public function store(Request $request)
    {
        Term::create($request->all());
        return redirect()->back()->with('success', 'Data has been added successfully'); 
    }

    public function edit(Request $request)
    {
        $term = Term::findOrFail($request->id);
        return view('admin.term.edit', compact('term'));
    }

    public function update(Request $request, Term $term)
    {
        $data = $request->all();

        $term = Term::findOrFail($request->id);
        $term->description = $data['description'];
        $term->save();
        return redirect('/admin/term')->with('success', 'Data has been Updated successfully'); 
    }

}
