<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        // Passing variables to the views.
        $title = 'Welcome to FrontPage';
        // One solution. Works with one parameter
        // return return view('pages.index', compact('title'));
        // Second solution. Can pass also arrays.
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Football', 'Basketball', 'Running']
        );
        return view('pages.services')->with($data);
    }
}
