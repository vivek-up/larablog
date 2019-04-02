<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = "Larablog";
        return view('pages.index')->with('tile', $title);
      //return view('pages.index', compact('title'));
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){

        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Web Development', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
