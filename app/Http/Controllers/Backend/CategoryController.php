<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Image;

class CategoryController extends Controller
{

    public function allCategory()
    {
        $category  = Category::all();


        return view('backend.category.index',compact('category'));
    }

    public function addcategory()
    {
        return view('backend.category.add_category');
    }


    public function storeCategory(Request $request)
    {
        $image = $request->file('category_image');

        $name_gen = hexdec(uniqid()) . '_' . $image->getClientOriginalName();

        Image::make($image)->resize(300, 300)->save('upload/category/' . $name_gen);

        $save_url = 'upload/category/' . $name_gen;

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            'category_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Category Data Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);
    }



    public function editCategory ($id)
    {

        $data = Category::findOrFail($id);

        return view('backend.category.edit_category', compact('data'));
    }



    public function updateCategory(Request $request)
    {



        // return $request->all();
        $id = $request->id;


        $category = Category::findOrFail($id);

        $oldImage = $category->category_image;

        if ($request->file('category_image')) {
            $image = $request->file('category_image');

            $name_gen = hexdec(uniqid()) . '_' . $image->getClientOriginalName();
            
            Image::make($image)->resize(300, 300)->save('upload/category/' . $name_gen);

            $save_url = 'upload/category/' . $name_gen;

            if ($oldImage && file_exists($oldImage)) {
                unlink($oldImage);
            }

            Category::findOrFail($id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
                'category_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Category Updated With Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.category')->with($notification);
        } else {
            Category::findOrFail($id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            ]);


            $notification = array(
                'message' => 'Category Updated Without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.category')->with($notification);
        }
    }

    public function deleteCategory(Request $request, $id)
    {       
        $category = Category::find($id);
        $oldImage = $category->category_image;

        if($oldImage && file_exists($oldImage)){
            unlink($oldImage);
        }
        $category->delete();

        return redirect()->back();
    }



    // Resource
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
