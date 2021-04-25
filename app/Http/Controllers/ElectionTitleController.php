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
           return redirect('/title');
    }

}
