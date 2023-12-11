<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.service.index');
    }





    public function serviceList()
    {
        $serviceList = Service::all();

        return response()->json([
            'status' => 'success',
            'data' => $serviceList
        ], 200);
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

            $title = $request->input('title');
            $serviceList = $request->input('service_list');
            $service_list = json_encode($serviceList);

            Service::create([
                'title' => $title,
                'service_list' => $service_list,
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
        return Service::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $id = $request->input('updateId');
            $serviceList = $request->input('updateservice_list');

            // Assuming you have a Service model
            $service = Service::find($id);

            if (!$service) {
                return response()->json(['status' => 'fail', 'message' => 'Service not found'], 404);
            }

            $service->title = $request->input('servicesTitleUpdate');
            $service->service_list = json_encode($serviceList);

            $service->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Service updated successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Service::where('id', $id)->delete();

        return response()->json([
            'status' => 'success',
            'message' => "Service Deleted Successfully",
        ], 200);
    }
}
