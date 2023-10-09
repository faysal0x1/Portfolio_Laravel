<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

use Image;

class BrandController extends Controller
{


    public function allBrand()
    {
        $brand = Brand::all();

        return view('backend.brand.index', compact('brand'));
    }

    public function addBrand()
    {


        return view('backend.brand.add_brand');
    }


    public function storeBrand(Request $request)
    {

        $image = $request->file('brand_image');

        $name_gen = hexdec(uniqid()) . '_' . $image->getClientOriginalName();
        Image::make($image)->resize(300, 300)->save('upload/brand/' . $name_gen);

        $save_url = 'upload/brand/' . $name_gen;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
            'brand_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.brand')->with($notification);
    }


    public function editBrand($id)
    {

        $data = Brand::findOrFail($id);

        return view('backend.brand.edit_brand', compact('data'));
    }



    public function updateBrand(Request $request)
    {



        // return $request->all();
        $id = $request->id;


        $brand = Brand::findOrFail($id);

        $oldImage = $brand->brand_image;

        if ($request->file('brand_image')) {
            $image = $request->file('brand_image');

            $name_gen = hexdec(uniqid()) . '_' . $image->getClientOriginalName();
            
            Image::make($image)->resize(300, 300)->save('upload/brand/' . $name_gen);

            $save_url = 'upload/brand/' . $name_gen;

            if ($oldImage && file_exists($oldImage)) {
                unlink($oldImage);
            }

            Brand::findOrFail($id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
                'brand_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Brand Updated With Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.brand')->with($notification);
        } else {
            Brand::findOrFail($id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
            ]);


            $notification = array(
                'message' => 'Brand Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.brand')->with($notification);
        }
    }

    public function deleteBrand(Request $request, $id)
    {       
        $brand = Brand::find($id);
        $oldImage = $brand->brand_image;

        if($oldImage && file_exists($oldImage)){
            unlink($oldImage);
        }
        $brand->delete();

        return redirect()->back();
    }


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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
