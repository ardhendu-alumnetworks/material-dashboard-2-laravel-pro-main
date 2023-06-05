<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        
        $this->authorize('manage-items', User::class);

        return view('laravel-examples.category.index',['categories'=>Category::all()]);
    }

    public function create(){

        $this->authorize('manage-items', User::class);

        return view('laravel-examples.category.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required|unique:categories,name',
            'description' =>'required|min:5',
        ]);

        Category::create($attributes);

        return redirect('category')->withStatus('Category successfully created.');
    }

    public function edit($id){
        
        $this->authorize('manage-items', User::class);

        return view('laravel-examples.category.edit', ['category' => Category::find($id)]);
    }

    public function update($id){
        
        request()->validate([
            'name' => 'required|max:255|unique:categories,name,'.$id,
            'description' =>'required|min:5',
        ]);

        Category::find($id)->update(request()->all());

        return redirect('category')->withStatus('Category successfully updated.');
    }

    public function destroy($id){

        Category::find($id)->delete();
        return redirect('category')->withStatus('Category successfully deleted.');
    }
}
