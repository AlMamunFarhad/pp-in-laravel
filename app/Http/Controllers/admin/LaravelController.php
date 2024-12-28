<?php

namespace App\Http\Controllers\admin;

use App\Models\Laravel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;

class LaravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolios.laravel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
            'github' => $request->github,
            'image' => '/laravel/' . $imageName,
        ]);

        return back()->with('success', 'Laravel Project created successfully.');
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
        $update = Laravel::findOrFail($id);
        return view('admin.portfolios.laravel.edit', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'project' => 'required',
            'github' => 'required',
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
            'github' => $request->github,
            'image' => $update->image ?? $update->image,
        ]);
        return back()->with('success', 'Laravel project successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
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
