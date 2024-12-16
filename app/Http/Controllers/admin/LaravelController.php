<?php

namespace App\Http\Controllers\admin;

use App\Models\Laravel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;

class LaravelController extends Controller
{
    public function create()
    {
        return view('admin.portfolios.laravel.create');
    }

    public function store(PortfolioRequest $request)
    {
        $request->validated($request->all());
        $image = $request->image;
        $ext = $image->extension();
        $imageName =  time() . '.' . $ext;
        $image->move(public_path('/laravel/'), $imageName);

        Laravel::create([
            'title' => $request->title,
            'project' => $request->project,
            'image' => '/laravel/' . $imageName,
        ]);

        return back()->with('success', 'Laravel Project created successfully.');
    }

    public function edit(string $id)
    {
        $update = Laravel::findOrFail($id);
        return view('admin.portfolios.laravel.edit', compact('update'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'project' => 'required',
            'image' => 'nullable|image',
        ]);

        $update = Laravel::findOrFail($id);

        if ($request->hasFile('image')) {

            if ($update->image && file_exists(public_path($update->image))) {
                unlink(public_path($update->image));
            }

            $image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/laravel/'), $image_name);
            $update->image = '/laravel/' . $image_name;
        }

        $update->update([
            'title' => $request->title,
            'project' => $request->project,
            'image' => $update->image ?? $update->image,
        ]);
        return back()->with('success', 'Laravel project successfully updated.');
    }

    public function destroy(string $id)
    {
        $laravel_id = Laravel::findOrFail($id);
        $image_path = public_path() . $laravel_id->image;

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $laravel_id->delete();
        return redirect()->route('portfolio.index')->with('danger', 'Laravel project deleted successfully.');
    }
}
