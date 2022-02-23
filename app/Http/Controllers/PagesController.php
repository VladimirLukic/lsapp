<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public $title = 'Welcome to Laravel from scratch';
    public function index(){
        $title = 'Welcome to Laravel from scratch';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
        // return view('pages.index')->with('title', $this->title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about', compact('title'));
    }

    public function services(){
        
        $data = [
            'title' => 'Our Services',
            'service' => 'Programming',
            'services' => ['Web Design', 'FrontEnd', 'BackEnd']
            // 'services' => ['Web Design'=>'FrontEnd', 'data'=>'BackEnd']
        ];
        return view('pages.services')->with($data);
    }
}
