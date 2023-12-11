<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Exception;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        return view('backend.about.index');
    }
    public function aboutData()
    {
        // Retrieve the latest About data
        $aboutData = About::latest()->first();

        if (!$aboutData) {
            abort(404);
        }

        // Assuming the PDF files are stored in the public/upload/about/cv/ directory
        $pdfPath = public_path("{$aboutData->pdf_file}");

        if (!file_exists($pdfPath)) {
            abort(404);
        }

        // Set the appropriate headers for PDF display
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        // Read the contents of the PDF file
        $pdfFile = file_get_contents($pdfPath);

        // Encode the PDF file contents as base64
        $base64Pdf = base64_encode($pdfFile);

        // Return a JSON response with About data and base64-encoded PDF
        return response()->json([
            'aboutData' => $aboutData,
            'pdfData' => $base64Pdf,
        ]);
    }

    public function store(Request $request)
    {
        try {

            $id = 1;
    
            DB::beginTransaction();
    
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
    
                if ($exist) {
                    $oldPdfFile = $exist->pdf_file;
    
                    if (!empty($oldPdfFile) && file_exists($oldPdfFile)) {
                        unlink($oldPdfFile);
                    }
                }
    
                $file = $request->file('pdf_file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
    
                $saveUrl = 'upload/about/cv/' . $fileName;
                $data['pdf_file'] = $saveUrl;
    
                $file->move(public_path('upload/about/CV/'), $fileName);
            }
    
            About::updateOrCreate(['id' => $id], $data);
    
            DB::commit();
    
            return response()->json([
                'status' => 'success',
                'message' => 'Data saved successfully',
            ], 200);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    
}
