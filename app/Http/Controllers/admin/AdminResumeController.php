<?php

namespace App\Http\Controllers\admin;

use App\Models\Resume;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResumeRequest;

class AdminResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all();
        return view('admin.resume.resume', compact('resumes'));
    }
    public function create()
    {
        return view('admin.resume.create');
    }

    public function store(ResumeRequest $request)
    {
        $request->validated($request->all());

        $image = $request->image;
        $ext = $image->extension();
        $imageName =  time() . '.' . $ext;
        $image->move(public_path('/resume/'), $imageName);

        Resume::create([
             'name' => $request->name,
             'title' => $request->title,
             'image' => '/resume/' . $imageName,
             'summary' => $request->summary,
             'experiences' => $request->experiences,
             'projects' => $request->projects,
             'skills' => $request->skills,
             'educations' => $request->educations,
             'interests' => $request->interests,
        ]);
        return back()->with('success','Resume created successfully.');

    }

    public function edit(string $id)
    {
        $edit = Resume::findOrFail($id);
        return view('admin.resume.edit', compact('edit'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'nullable|image',
            'summary' => 'required',
            'experiences' => 'required',
            'projects' => 'required',
            'skills' => 'required',
            'educations' => 'required',
            'interests' => 'required',
        ]);

        $resume = Resume::findOrFail($id);

        if ($request->hasFile('image')) {

            if ($resume->image && file_exists(public_path($resume->image))) {
                unlink(public_path($resume->image));
            }
            
            // $path = public_path() . '/resume/';
            // $image = $request->image;
            // $ext = $image->extension(); // Typo fixed
            // $image_name = time() . '.' . $ext;
            // $image->move($path, $image_name);

            $image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/resume/'), $image_name);
            $resume->image = '/resume/' . $image_name;
        } 
        $resume->update([
            'name' => $request->name,
            'title' => $request->title,
            'image' => $resume->image ?? $resume->image,
            'summary' => $request->summary,
            'experiences' => $request->experiences,
            'projects' => $request->projects,
            'skills' => $request->skills,
            'educations' => $request->educations,
            'interests' => $request->interests,
        ]);
        return back()->with('success', 'Resume updated successfully.');
    }

    public function destroy(string $id)
    {
        $resume_id = Resume::findOrFail($id);
        $image_path = public_path() . $resume_id->image;

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $resume_id->delete();
        return redirect()->route('admin.resume')->with('danger', 'Resume deleted successfully.');
    }


}
