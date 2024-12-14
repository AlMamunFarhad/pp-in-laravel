<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use App\Models\Design;

class DesignController extends Controller
{
    public function create()
    {
        return view('admin.portfolios.design.create');
    }

    public function store(PortfolioRequest $request)
    {
        $request->validated($request->all());
        $image = $request->image;
        $ext = $image->extension();
        $imageName =  time() . '.' . $ext;
        $image->move(public_path('/design/'), $imageName);

        Design::create([
            'title' => $request->title,
            'project' => $request->project,
            'image' => '/design/' . $imageName,
        ]);

        return back()->with('success', 'Design project created successfully.');
    }

    public function edit(string $id)
    {
        $update = Design::findOrFail($id);
        return view('admin.portfolios.design.edit', compact('update'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'project' => 'required',
            'image' => 'nullable|image',
        ]);

        $update = Design::findOrFail($id);

        if ($request->hasFile('image')) {

            if ($update->image && file_exists(public_path($update->image))) {
                unlink(public_path($update->image));
            }
            
            $path = public_path() . '/design/';
            $image = $request->image;
            $ext = $image->extension(); // Typo fixed
            $image_name = time() . '.' . $ext;
            $image->move($path, $image_name);

            $update->update([
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
                'image' => '/design/' . $image_name,
            ]);
        } else {
            $image_name = $update->image;
        }
        return back()->with('success', 'Design project updated successfully.');
    }

    
    public function destroy(string $id)
    {
        $php_id = Design::findOrFail($id);
        $image_path = public_path() . $php_id->image;

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $php_id->delete();
        return redirect()->route('portfolio.index')->with('danger', 'Design project deleted successfully.');
    }
}
