<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getInterstellar() {
        return view('interstellar')->with("theme","light")->with("show_footer",true)->with('title','Interstellar');
    }

    public function getInception() {
        return view('inception')->with("theme","dark")->with("show_footer",true)->with('title','Inception');
    }

    public function getFirstMan() {
        return view('first_man')->with("theme","light")->with("show_footer",true);
    }
}
