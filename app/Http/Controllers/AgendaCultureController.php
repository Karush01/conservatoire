<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaCultureController extends Controller
{
    public function index() {
        return view('agenda_culture', [ ]);
    }
}
