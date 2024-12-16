<?php

namespace App\Http\Controllers\admin;

use App\Models\Javascript;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;

class JavascriptController extends Controller
{
    public function create()
    {
        return view('admin.portfolios.javascript.create');
    }

    public function store(PortfolioRequest $request)
    {
        $request->validated($request->all());
        $image = $request->image;
        $ext = $image->extension();
        $imageName =  time() . '.' . $ext;
        $image->move(public_path('/javascript/'), $imageName);

        Javascript::create([
            'title' => $request->title,
            'project' => $request->project,
            'image' => '/javascript/' . $imageName,
        ]);

        return back()->with('success', 'Javascript project created successfully.');
    }

    public function edit(string $id)
    {
        $update = Javascript::findOrFail($id);
        return view('admin.portfolios.javascript.edit', compact('update'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'project' => 'required',
            'image' => 'nullable|image',
        ]);

        $update = Javascript::findOrFail($id);

        if ($request->hasFile('image')) {

            if ($update->image && file_exists(public_path($update->image))) {
                unlink(public_path($update->image));
            }
            
            $image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/javascript/'), $image_name);
            $update->image = '/javascript/' . $image_name;
        }

        $update->update([
            'title' => $request->title,
            'project' => $request->project,
            'image' => $update->image ?? $update->image,
        ]);
        return back()->with('success', 'Javascript project updated successfully.');
    }

    
    public function destroy(string $id)
    {
        $js_id = Javascript::findOrFail($id);
        $image_path = public_path() . $js_id->image;

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $js_id->delete();
        return redirect()->route('portfolio.index')->with('danger', 'Javascript project deleted successfully.');
    }
}
