<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.skills.index');
    }

    public function skillList()
    {
        return Skill::latest()->get();
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
        
        Skill::create([
            'title' => $request->title,
            'rate' => $request->rate,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => $request->title,
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return Skill::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'title' => $request->title,
            'rate' => $request->rate,
        ];

        $data = array_filter($data, function ($value) {
            return !empty($value);
        });

        Skill::where('id', $id)->update($data);

        return response()->json([
            'status' => 'success',
            'message'=>'Skill is updated suuccessfully'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::where('id', $id)->delete();
        return response()->json([
            'status' => 'success',
            'message'=>'Skill is Deleted suuccessfully'
        ],200);
    }
}
