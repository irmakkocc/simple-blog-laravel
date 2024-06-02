<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class Dashboard extends Controller
{
    public function index(){
        
        $article=Article::all()->count();
        $category=Category::all()->count();
        $activeArticle=Article::where('status', 1)->count();
        $activeCategory=Category::where('status', 1)->count();

        return view('back.dashboard', compact('article', 'category', 'activeArticle', 'activeCategory'));
    }
}
