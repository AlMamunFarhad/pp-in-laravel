<?php

namespace App\Http\Controllers\admin;


use App\Models\Skill;
use App\Models\SkillImage;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Models\SkillContent;
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $skills = Skill::orderByDesc('id')->get(); 
        $contents = SkillContent::orderByDesc('id')->get(); 
        return view('admin.skills.index', compact('skills','contents'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $request->validate([
            'title' => 'required',
            'content' => 'required',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);



        $imagePaths = []; 

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                 $image->move(public_path('skill_img'), $imageName);
                $imagePaths[] = 'skill_img/' .$imageName;
            }
        }
     
        Skill::create([
            'title' => $request->title,
            'content' => $request->content,
            'images' =>  json_encode($imagePaths),
         ]);
        return back()->with('success', 'Skill added successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $update = Skill::findOrFail($id);
        return view('admin.skills.edit', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'new_images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
    
        $skill = Skill::find($id);
        $existingImages = $request->input('existing_images', []); 
    
        $allOldImages = json_decode($skill->images, true);
        $deletedImages = array_diff($allOldImages, $existingImages);
    
        foreach ($deletedImages as $deletedImage) {
            $imagePath = public_path($deletedImage);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $newImagePaths = [];
        if ($request->hasfile('new_images')) {
            foreach ($request->file('new_images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('skill_img'), $imageName);
                $newImagePaths[] = 'skill_img/' . $imageName; 
            }
        }
        $allImages = array_merge($existingImages, $newImagePaths);
        $skill->update([
            'title' => $request->title,
            'content' => $request->content,
            'images' => json_encode($allImages),
        ]);
    
        return back()->with('success', 'Skill updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::findOrFail($id);
        $images = json_decode($skill->images, true);
        if ($images) {
            foreach ($images as $imagePath) {
                $fullPath = public_path($imagePath);
                if (file_exists($fullPath)) {
                    unlink($fullPath);
                }
            }
        }
        $skill->delete();
        return redirect()->back()->with('success', 'Skill and associated images deleted successfully.');
    }
    
}
