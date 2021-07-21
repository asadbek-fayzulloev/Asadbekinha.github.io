<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('pages.index');
    }
    public function cvPage(){
        return view('pages.cv');
    }
    public function projectsPage(){
        return view('pages.projects-grid-cards');
    }
    public function hirePage(){
        return view('pages.hire-me');
    }
    public function contactPage(){
        return view('pages.contact');

    }
    public function blogPage(){
        return view('pages.blog.index');

    }
}
