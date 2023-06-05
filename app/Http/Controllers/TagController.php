<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(){
        
        $this->authorize('manage-items', User::class);

        return view('laravel-examples.tag.index',['tags'=>Tag::all()]);
    }

    public function create(){

        $this->authorize('manage-items', User::class);
        return view('laravel-examples.tag.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required|max:255|unique:tags,name',
            'color' =>'required',
        ]);

        Tag::create($attributes);

        return redirect('tag')->withStatus('Tag successfully created.');
    }

    public function edit($id){
        
        $this->authorize('manage-items', User::class);

        return view('laravel-examples.tag.edit', ['tag' => Tag::find($id)]);
    }

    public function update($id){
        
        request()->validate([
            'name' => 'required|unique:tags,name,'.$id,
            'color' =>'required',
        ]);

        Tag::find($id)->update(request()->all());

        return redirect('tag')->withStatus('Tag successfully updated.');
    }

    public function destroy($id){
        
        Tag::find($id)->delete();
        return redirect('tag')->withStatus('Tag successfully deleted.');
    }
}
