<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Exception;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('backend.about.index');
    }
    public function aboutData()
    {
        return About::latest()->first();
    }

    public function store(Request $request)
    {

        $id = 1;
        try {
            $data = [
                'title' => $request->title,
                'short_title' => $request->short_title,
                'bio' => $request->bio,
                'description' => $request->description,
            ];

            $data = array_filter($data, function ($value) {
                return !empty($value);
            });


            if ($request->hasFile('pdf_file')) {

                $exist = About::find($id);

          
                $file = $request->file('pdf_file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();

                $saveUrl = 'upload/about/cv/' . $fileName;

                if ($exist) {
                    $oldPdfFile = $exist->pdf_file;

                    if (file_exists($oldPdfFile)) {
                        unlink($oldPdfFile);
                    }
                }
                $data['pdf_file'] = $saveUrl;

                $file->move(public_path('upload/about/cv/'), $fileName);

                About::updateOrCreate(
                    ['id' => 1],
                    $data
                );


            } else {

                About::updateOrCreate(
                    ['id' => 1],
                    $data
                );
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Data saved successfully',
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

}
