<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class ConcertController extends Controller
{
    public function allConcerts() {
        $agendas = Post::paginate(4);
        return view('concerts', [
            'agendas'=>$agendas
        ]);
    }


}
