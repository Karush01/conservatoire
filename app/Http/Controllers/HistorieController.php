<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HistorieController extends Controller
{
    public function index() {
        $histories = Post::where('category_id',4)->get();
        return view('historie', [
            'histories'=>$histories
        ]);
    }
}
