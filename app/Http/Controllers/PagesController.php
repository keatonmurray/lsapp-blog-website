<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {

        $data = [
            'title' => 'Welcome to LSAPP!',
            'description' => 'Create beautiful blogs, memos, and news articles with our user-friendly text editor, and share it to the world',
            'button' => 'Learn More'
    ];
        return view('pages/index')->with($data);
    }

    public function about() {

        $data = [
            'title' => 'About LSAPP',
            'description' => 'LSAPP is a writing tool where you can write content, and share it with everyone. Your posts will be visible in the main Blog section for all the other users to see'
    ];
        return view('pages/about')->with($data);
    }

    public function services() {

        $data = [
            'title' => 'Our Services',
            'services' => ['Copywriting', 'Proofreading', 'Web Content Development', 'SEO']
    ];
        return view('pages/services')->with($data);
    }
}
