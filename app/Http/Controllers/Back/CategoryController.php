<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('back.categories.index', compact('categories'));
    }

    public function switch(Request $request){
        $categories = Category::findOrFail($request->id);
        $categories->status=$request->statu == 1 ? 1 : 0 ;
        $categories->save();

        toastr()->success( 'Makale durumu başarıyla güncellendi.');
    }

    public function deleteData(Request $request)
    {
    try {
        $category = Category::findOrFail($request->id);

        // Kategoriye ait tüm makaleleri al
        $articles = $category->articles;

        // Eğer makaleler varsa
        if ($articles) {
            // Her bir makaleyi sil
            foreach ($articles as $article) {
                $article->delete();
            }
        }

        // Kategoriyi sil
        $category->delete();

        toastr()->success('Kategori ve ilgili makaleler başarıyla silindi.');
        return response()->redirect()->back();
    } catch (\Exception $e) {
        //\Log::error('Silme işlemi sırasında hata: ' . $request->id . ' - ' . $e->getMessage());
        //return response()->json(['success' => false, 'error' => $e->getMessage()]);
        toastr()->error('Bu kategoriye ait makale varken kategoriyi silemezsiniz!');
        return redirect()->back();
    }
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $isExist=Category::whereSlug(Str::slug($request->category))->first();
        if($isExist){
            toastr()->error($request->category.' adında bir kategori zaten mevcut');
            return redirect()->back();
        }
        $categories= new Category;
        $categories->name=$request->category;
        $categories->slug=Str::slug($request->category);
        $categories->save();

        toastr()->success('Kategori başarıyla oluşturuldu.');
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
