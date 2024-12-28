<?php

namespace App\Http\Controllers\admin;

use App\Models\Php;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;

class PhpController extends Controller
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
        return view('admin.portfolios.php.create');
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
        $image->move(public_path('/php/'), $imageName);

        Php::create([
            'title' => $request->title,
            'project' => $request->project,
            'github' => $request->github,
            'image' => '/php/' . $imageName,
        ]);

        return back()->with('success', 'PHP Project created successfully.');
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
        $update = Php::findOrFail($id);
        return view('admin.portfolios.php.edit', compact('update'));
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

        $update = Php::findOrFail($id);

        if ($request->hasFile('image')) {

            if ($update->image && file_exists(public_path($update->image))) {
                unlink(public_path($update->image));
            }
            
            $image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/php/'), $image_name);
            $update->image = '/php/' . $image_name;
        }
        $update->update([
            'title' => $request->title,
            'project' => $request->project,
            'github' => $request->github,
            'image' => $update->image ?? $update->image,
        ]);

        return back()->with('success', 'PHP Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $php_id = Php::findOrFail($id);
        $image_path = public_path() . $php_id->image;

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $php_id->delete();
        return redirect()->route('portfolio.index')->with('danger', 'PHP project deleted successfully.');
    }
}
