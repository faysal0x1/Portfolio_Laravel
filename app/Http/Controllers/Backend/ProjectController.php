<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Project::all();
        return view('backend.projects.index', compact('data'));
    }
    // Project List Ajax

    public function projectList()
    {
        return Project::all();
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
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'desc' => 'required|string',
        //     'tags' => 'required|array',
        // ]);

        try {
            // Handle image upload
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload/projects'), $imageName);

            // Create new project
            $project = Project::create([
                'name' => $request->name,
                'image' => 'upload/projects/' . $imageName,
                'description' => $request->desc,
                'tags' => json_encode($request->tags),
            ]);


            return response()->json([
                'status' => 'success',
                'message' => 'Project created successfully',
                'project' => $project,
            ], 200);



        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong',
            ], 500);
        }
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
        return Project::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
