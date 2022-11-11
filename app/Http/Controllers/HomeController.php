<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $menus = [
            'Home',
            'About',
            'Benefits',
            'Kelas',
            'Blog',
            'Contact',
        ];

        $categories = Category::all();
        $setting = Setting::find(1);

        return view('pages.home.home',[
            'title' => 'Qdemy',
            'menus' => $menus,  
            'categories' => $categories,  
            'setting' => $setting,  
        ]);
    }

}
