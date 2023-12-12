<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function index()
    {



        return view('frontend.index');
    }

    public function login()
    {
        return view('frontend.auth.login');
    }

    public function getHeroData()
    {
        $data = About::first();

        return response()->json([
            'success' => true,
            $data,
            'message' => 'Hero Data fetched successfully.'
        ]);
    }

    public function getServices()
    {
        $data = Service::all();
        return  $data;
    }

    public function getSkills()
    {
        $skills = Skill::all();

        return view('frontend.components.home.Skills', compact('skills'));
    }

    // public function blogsPage(): View
    // {
    //     $data = BdLabDetail::find(1);

    //     return view('frontend.pages.blog', compact('data'));
    // }

    public function blogDetails($id): View
    {
        $blog = Blog::with('category')->findOrFail($id);

        return view('frontend.pages.blog_details', compact('blog'));
    }
}
