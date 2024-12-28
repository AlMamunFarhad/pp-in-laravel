<?php

namespace App\Http\Controllers\admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $image = $request->image;
        $imgExtension = $image->extension();
        $imageName =  time() . '.' . $imgExtension;
        $image->move(public_path('/about/'), $imageName);

        About::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => '/about/' . $imageName,
        ]);

        return back()->with('success', 'Your about created successfully.');
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
        $about = About::findOrFail($id); // Find the data to edit
        return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);

        $update = About::find($id);

        if ($request->hasFile('image')) {

            if ($update->image && file_exists(public_path($update->image))) {
                unlink(public_path($update->image));
            }

            $path = public_path() . '/about/';
            $image = $request->image;
            $extention = $image->extension(); // Typo fixed
            $image_name = time() . '.' . $extention;
            $image->move($path, $image_name);

            $update->update([
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
                'image' => '/about/' . $image_name,
            ]);
        } else {
            $image_name = $update->image;
        }


        return back()->with('success', 'About successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about_id = About::findOrFail($id);
        $image_path = public_path() . $about_id->image;

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $about_id->delete();
        return redirect()->back()->with('danger', 'About successfully deleted.');
    }
}
