<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use Image;


class CandidateController extends Controller
{
    public function index()
    {   
        $allCandidates = Candidate::latest()->get();
        return view('admin.candidate.index',compact('allCandidates'));
    }

    public function create()
    {
        return view('admin.candidate.create');
    }

    public function store(Request $request)
    {   
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $candidate = new Candidate;
            $candidate->firstname           = $data['firstname'];
            $candidate->lastname            = $data['lastname'];
            $candidate->grade_section       = $data['grade_section'];
            $candidate->zodiac_sign         = $data['zodiac_sign'];
            $candidate->height              = $data['height'];
            $candidate->weight              = $data['weight'];
            $candidate->date_of_birth       = date('Y-m-d');
            $candidate->blood_type          = $data['blood_type'];
            $candidate->motto               = $data['motto'];
            $candidate->category            = $data['category'];
           
           
            // Upload Image
             if($request->hasFile('image')){
                 $image_tmp = $request->file('image');
                 if ($image_tmp->isValid()) {
                     // Upload Images after Resize
                     $extension = $image_tmp->getClientOriginalExtension();
                     $fileName = rand(111,99999).'.'.$extension;
                     $large_image_path = 'images/backend_images/products/large'.'/'.$fileName;
                     $medium_image_path = 'images/backend_images/products/medium'.'/'.$fileName;  
                     $small_image_path = 'images/backend_images/products/small'.'/'.$fileName;  
                     Image::make($image_tmp)->save($large_image_path);
                     Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                     Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                     $candidate ->image = $fileName; 
                 }
             }

            
            
            $candidate->save();
            // $notification = array(
            //     'message' => 'Candidate has been added successfully'
            // );
            return redirect()->back()->with('success', 'Candidate has been added successfully'); 
        }  
    }    
    
    public function edit(Request $request)
    {   
        // dd(1);
        $candidate = Candidate::findOrFail($request->id);
        return view('admin.candidate.edit', compact('candidate'));
    }

    public function update(Request $request, Candidate $candidate)
    {
        
               
                $candidate = Candidate::findOrFail($request->id);
                $data = $request->all();
                //echo "<pre>"; print_r($data); die;
                
                $candidate->firstname           = $data['firstname'];
                $candidate->lastname            = $data['lastname'];
                $candidate->grade_section       = $data['grade_section'];
                $candidate->zodiac_sign         = $data['zodiac_sign'];
                $candidate->height              = $data['height'];
                $candidate->weight              = $data['weight'];
                $candidate->date_of_birth       = date('Y-m-d');
                $candidate->blood_type          = $data['blood_type'];
                $candidate->motto               = $data['motto'];
                $candidate->category            = $data['category'];
               
               
                // Upload Image
                 if($request->hasFile('image')){
                     $image_tmp = $request->file('image');
                     if ($image_tmp->isValid()) {
                         // Upload Images after Resize
                         $extension = $image_tmp->getClientOriginalExtension();
                         $fileName = rand(111,99999).'.'.$extension;
                         $large_image_path = 'images/backend_images/products/large'.'/'.$fileName;
                         $medium_image_path = 'images/backend_images/products/medium'.'/'.$fileName;  
                         $small_image_path = 'images/backend_images/products/small'.'/'.$fileName;  
                         Image::make($image_tmp)->save($large_image_path);
                         Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                         Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                         $candidate ->image = $fileName; 
                     }
                 }
    
                
                
                $candidate->update();
                // $notification = array(
                //     'message' => 'Candidate has been added successfully'
                // );

                // dd($candidate->save());
                
                return redirect('/candidate')->with('success', 'Candidate has been Updated successfully'); 
            
           
    }

}
