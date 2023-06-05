<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Tag;
use App\Models\Category;

class ItemsController extends Controller
{
    public function index(){

        return view('laravel-examples.items.index', ['items'=>Item::with(['tag', 'category'])->get()]);
    }

    public function create(){

        $this->authorize('manage-items', User::class);

        return view('laravel-examples.items.create',['categories'=>Category::get(['id','name']),'tags'=>Tag::get(['id','name'])]);
    }

    public function store(){

        $attributes=request()->validate([
            'name' => 'required|min:3|unique:items,name',
            'category_id' =>'required|exists:categories,id',
            'description' => 'required',
            'picture' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
            'tags' => 'required',
            'tags.*' => 'exists:tags,id',
            'status' =>'required|in:published,draft,archive',
            'options' => 'required',
            'date' => 'required'
        ]);
       
        $path = request()->picture->store('pictures', 'public');
        $attributes['picture'] = "$path";

        $attributes['homepage'] = request()->homepage ? 1 : 0;
        $attributes['options'] = request()->options ? request()->options : null;

        $item = Item::create($attributes);
        $item->tag()->sync(request()->get('tags'));

        return redirect('items')->withStatus('Item successfully created.');

    }

    public function edit($id){

        $this->authorize('manage-items', User::class);

        $item = Item::find($id);

        if($item->options == null){
            $item->update([
                'options' => ["1","2","3"]
            ]);
        }

        return view('laravel-examples.items.edit', ['item' => Item::find($id), 'categories' => Category::get(['id','name']), 'tags' => Tag::get(['id','name'])]);

    }

    public function update($id){
        
        $attributes=request()->validate([
            'name' => 'required|unique:items,name,'.$id,
            'category_id' =>'required|exists:categories,id',
            'picture' => 'mimes:jpg,jpeg,png,bmp,tiff |max:4096',
            'description' => 'required',
            'tags' => 'required',
            'tags.*' => 'exists:tags,id',
            'status' =>'required|in:published,draft,archive',
            'options' => 'required',
            'date' => 'required'
        ]);

        $item = Item::find($id);

        if (request()->file('picture')){

            $currentPicture = $item->picture;

            if ($currentPicture !=='pictures/img1.jpg' && $currentPicture !=='pictures/img2.jpg' && $currentPicture !=='pictures/img3.jpg'){
                unlink(storage_path('app/public/'.$currentPicture));
            }

            $path = request()->picture->store('pictures', 'public');
            $attributes['picture'] = "$path";
        }
        else{
            unset($attributes['picture']);
        }

        $attributes['homepage'] = request()->homepage ? 1 : 0;

        $item->update($attributes);
        $item->tag()->sync(request()->get('tags'));

        return redirect('items')->withStatus('Item successfully updated.');
    }


    public function destroy($id){

        $currentPicture = Item::find($id)->picture;

        if ($currentPicture !=='pictures/img1.jpg' && $currentPicture !=='pictures/img2.jpg' && $currentPicture !=='pictures/img3.jpg'){
            unlink(storage_path('app/public/'.$currentPicture));
        }

        Item::find($id)->delete();
        
        return redirect('items')->withStatus('Item successfully deleted.');
    }
}
