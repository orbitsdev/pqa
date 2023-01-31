<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{


    public function index(){

       return Inertia::render('admin/Index');

    }

    public  function dashboard(){
        return Inertia::render('admin/Dashboard');
    }

    public  function event_management(){
        return Inertia::render('admin/EventManagement');
    }

    public function about_pqa(){
        return Inertia::render('admin/AboutPQA');
    }

    public function applicants(){
        return Inertia::render('admin/Applicants');
    }
    public function assessores(){
        return Inertia::render('admin/Assessores');
    }

    public function resources(){
        return Inertia::render('admin/Resources');
    }
    public function news_and_articles(){
        return Inertia::render('admin/NewsAndArticles');
    }
    public function fqa(){
        return Inertia::render('admin/FQA');
    }

    public function contact_information(){
        return Inertia::render('admin/ContactInformation');
    }


}
