<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Intervention\Image\ImageManagerStatic;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IconController extends Controller
{
    public function index()
    {
        $iconData = Icon::all()[0];
        
        $smallIcon = ImageManagerStatic::make('images/' . $iconData->src)->resize(111, 32);
        $bigIcon = ImageManagerStatic::make('images/' . $iconData->src)->resize(504, 148);

        $smallIcon->save("images/smallIcon.png", 100);
        $bigIcon->save("images/bigIcon.png", 100);

        return view("admin.edit_icon", compact('iconData', 'smallIcon', 'bigIcon'));
    }
    public function store(Request $request)
    {
        $validateForm = $request->validate([
            'src' =>'required',
        ]);
        $newEntry = new Icon;
        $newEntry->src = $request->file("src")->hashName();
        $request->file("src")->storePublicly("images", "public");
        $newEntry->save();
        
        return redirect()->back();
    }
    public function destroy(){
        $newEntry = Icon::all()[0];  
        $newEntry->delete(); 
        Storage::disk('public')->delete('images/'.$newEntry->src);
        return redirect()->back();
    }
}
