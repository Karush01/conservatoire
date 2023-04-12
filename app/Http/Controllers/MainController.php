<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class MainController extends Controller
{
    public function homePageWithData()
    {
        $agendas = Post::where('category_id', 18)->get();
        $topicals = Post::where('category_id', 17)->get();

        return view('home', [
            'agendas' => $agendas,
            'topicals' => $topicals,
        ]);
    }

    public function agendaSingle($id)
    {
        $agenda = Post::where('id', $id)->first();

        return view('agenda_single', [
            'agenda' => $agenda
        ]);
    }

    public function topicalSingle($id)
    {
        $topical = Post::where('id', $id)->first();

        return view('topical_single', [
            'topical' => $topical
        ]);
    }

    public function textPage($slug)
    {
        $page_data = Page::where('slug', $slug)->first();

        return view('text_page', [
            'page_data' => $page_data
        ]);
    }


    public function programsAndDiplomas()
    {
        $programs_and_diplomas = Post::where('category_id', 3)->paginate(4);
        return view('programmes_et_diplome', [
            'programs_and_diplomas' => $programs_and_diplomas
        ]);
    }

    public function programsAndDiplomasSingle($id)
    {
        $page_data = Post::where('id', $id)->first();

        return view('text_page', [
            'page_data' => $page_data
        ]);
    }

    public function newsSingle($id)
    {
        $page_data = Post::where('id', $id)->first();

        return view('text_page', [
            'page_data' => $page_data
        ]);
    }

    public function getMenus()
    {
        $menus = MenuItem::where('menu_id', 2)->get();
        return view('layouts.navigation', [
            'menus' => $menus
        ]);
    }


    public function getAllNews()
    {
        $catIds = [];
        $categories_by_date = Category::where('parent_id', 19)->get();
        foreach ($categories_by_date as $item) {
            array_push($catIds, $item->id);
        }
        array_push($catIds, 19);


        $news = Post::whereIn('category_id', $catIds)->paginate(6);

        return view('news', [
            'news' => $news,
            'categories_by_date' => $categories_by_date
        ]);
    }


    public function getNewsByCategory($id)
    {
        $categories_by_date = Category::where('parent_id', 19)->get();

        $news = Post::where('category_id', $id)->paginate(6);

        return view('news', [
            'news' => $news,
            'categories_by_date' => $categories_by_date
        ]);
    }
}
