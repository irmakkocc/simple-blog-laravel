<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;
use Illuminate\Support\Str;

class ConfigController extends Controller
{
    public function index(){
        $config=Config::find(1);
        return view('back.config.index', compact('config'));
    }

    public function update(Request $request){
        $config=Config::find(1);
        $config->title=$request->title;
        $config->active=$request->active;
        $config->twitter=$request->twitter;
        $config->instagram=$request->instagram;
        $config->github=$request->github;
        $config->linkedln=$request->linkedln;

        if($request->hasFile('logo')){
            $logo=Str::slug($request->title).'-logo.'.$request->logo->getClientOriginalExtension();
            $logoPath = public_path('uploads');
            if (!file_exists($logoPath)) {
                mkdir($logoPath, 0777, true);
            }
            $request->logo->move($logoPath, $logo);
            $config->logo='uploads/'.$logo;
        }

        if($request->hasFile('favicon')){
            $favicon=Str::slug($request->title).'-favicon.'.$request->favicon->getClientOriginalExtension();
            $faviconPath = public_path('uploads');
            if (!file_exists($faviconPath)) {
                mkdir($faviconPath, 0777, true);
            }
            $request->favicon->move($faviconPath, $favicon);
            $config->favicon='uploads/'.$favicon;
        }

        $config->save();
        toastr()->success('Ayarlar başarıyla güncellendi');
        return redirect()->back();
    }
}
