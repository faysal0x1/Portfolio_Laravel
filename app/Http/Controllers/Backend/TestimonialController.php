<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.testimonial.index');
    }

    public function testimonialList()
    {
        return Testimonial::all();
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
        try {

            $name = $request->input('name');
            $position = $request->input('position');
            $description = $request->input('description');
            $rating = $request->input('rating');

            Testimonial::create([
                'name' => $name,
                'position' => $position,
                'description' => $description,
                'rating' => $rating,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => "Service Addded Successfully",
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'fail',
                'message' => "Something went wrong",
            ], 404);
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
        return Testimonial::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->description,
            'rating' => $request->rating,
        ];

        $data = array_filter($data, function ($value) {
            return !empty($value);
        });

        Testimonial::where('id', $id)->update($data);

        return response()->json([
            'status' => 'success',
            'message'=>'Testimonial is updated suuccessfully'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return response()->json([
            'status' => 'success',
            'message'=>'Testimonial is Deleted suuccessfully'
        ],200);
    }
}
