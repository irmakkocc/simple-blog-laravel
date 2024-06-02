<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Article;
use App\Models\Category;
use App\Models\Config;

class Homepage extends Controller
{
    public function __construct(){
        if(Config::find(1)->active==0){
            return redirect()->to('/aktif-degil')->send();
        }
        view()->share('categories', Category::where('status', 1)->orderBy('name', 'ASC')->get());
    }
    public function index(){
        
        $data['articles']=Article::with('getCategory')->where('status', 1)->whereHas('getCategory',function($query){
            $query->where('status', 1);
        })->orderBy('created_at','DESC')->paginate(10);
        $paginator = $data['articles'];
        return view('front.homepage', $data, compact('paginator'));
    }

    public function single($category, $slug){

        $category=Category::whereSlug($category)->first() ?? abort(403, 'Böyle bir kategori bulunamadı');
        $article=Article::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403, 'Böyle bir kategori bulunamadı');

        $data['article']=Article::where('slug', $slug)->first() ?? abort(403, 'Böyle bir yazı bulunamadı');
        //dd($article);
        return view('front.single', $data);

    }

    public function category($slug){
        $category=Category::whereSlug($slug)->first() ?? abort(403, 'Böyle bir kategori bulunamadı');
        $data['category']=$category;
        $data['articles']=Article::where('status', 1)->where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(1);
        $paginator = $data['articles'];
        return view('front.category', $data, compact('paginator'));
    }

    public function search(Request $request){
        $query = $request->input('query');
        $articles=Article::where('title', 'LIKE', "%{$query}%")->orWhere('content', 'LIKE', "%{$query}%")->where('status', 1)->orderBy('created_at', 'DESC')->paginate(10);

        return view('front.search', compact('articles', 'query'));
    }
}
