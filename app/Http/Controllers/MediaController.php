<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\MediaRequest;
use Illuminate\Http\RedirectResponse;

class MediaController extends Controller
{
    public function media(): View | RedirectResponse
    {
        $medias = Media::all();

        return view('admin.media.media', compact('medias'));
    }

    public function createMedia(): View
    {
        $categories = Category::orderBy('name')->get(['name','id']);

        return view('admin.media.create-media', compact('categories'));
    }

    public function storeMedia(MediaRequest $request)
    {
        $image = $this->upload($request);

        $data = $request->all();

        $data['image'] = $image;

        Media::create($data);

         return redirect()->route('media')->with('success', 'Media created successfully');
    }

    private function upload($request){

        $imageWithExt = $request->file('image')->getClientOriginalName();
       
        $imageName = pathinfo($imageWithExt, PATHINFO_FILENAME);

        $imageExt = $request->file('image')->getClientOriginalExtension();

        $store = $imageName.'_'.time().'.'.$imageExt;
            
        $request->file('image')->storeAs('public/image', $store); 

        return $store;
    }
}
