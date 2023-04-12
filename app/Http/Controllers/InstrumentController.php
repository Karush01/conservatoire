<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class InstrumentController extends Controller
{
    public function index()
    {
        $instruments = Post::where('category_id', 5)->get();
        return view('instruments', [
            'instruments' => $instruments
        ]);
    }

    public function instrumentSingle($slug)
    {
        $categories = Category::where('slug', $slug)->first();

        $teachers = Post::where('category_id', $categories->id)->get();
        $all_categories = Category::where('parent_id', 5)->get();
        return view('our_teachers', [
            'teachers' => $teachers,
            'all_categories' => $all_categories
        ]);
    }

    public function instrumentSingleByID($id)
    {
        $teachers = Post::where('id', $id)->get();
        $all_categories = Category::where('parent_id', 5)->get();
        return view('our_teachers', [
            'teachers' => $teachers,
            'all_categories' => $all_categories
        ]);
    }

    public function getPostsByInstrument(Request $request)
    {
        $category_id = (int)$request->input('selectedItem');
        $teachers = Post::where('category_id', $category_id)->get();
        return response()->json([
            'teachers' => $teachers
            ]);
    }
}
