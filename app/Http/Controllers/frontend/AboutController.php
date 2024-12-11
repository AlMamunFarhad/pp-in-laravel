<?php

namespace App\Http\Controllers\frontend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    public function index()
    {
        $abouts = About::all();
        return view('admin.about', compact('abouts'));
    }

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

    public function edit($id)
    {
        $about = About::findOrFail($id); // Find the data to edit
        return view('admin.edit', compact('about'));
    }
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

    public function destroy(string $id)
    {
        $about_id = About::findOrFail($id);
        $image_path = public_path() . $about_id->image;

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $about_id->delete();
        return redirect()->route('index.about')->with('danger', 'About successfully deleted.');
    }
}
