<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {

        $data = [
            'title' => 'LSAPP',
            'description' => 'Create beautiful blogs, memo, or articles, and share it to the world with LSAPP!',
            'create' => 'Write A Story'
    ];
        return view('pages/index')->with($data);
    }

    public function about() {

        $data = [
            'title' => 'About Us',
            'description' => 'This is the about page'
    ];
        return view('pages/about')->with($data);
    }

    public function services() {

        $data = [
            'title' => 'Our Services',
            'services' => ['Proofreading', 'Content Writing', 'SEO']
    ];
        return view('pages/services')->with($data);
    }
}
