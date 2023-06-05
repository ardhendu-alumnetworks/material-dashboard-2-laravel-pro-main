<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller
{
    public function index(){
        
        $this->authorize('manage-users', User::class);

        return view('laravel-examples.roles.index', ['roles' => Role::all()]);
    }

    public function create(){
        $this->authorize('manage-users', User::class);

        return view('laravel-examples.roles.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required|max:255|unique:roles,name',
            'description' =>'required|min:5',
        ]);

        Role::create($attributes);

        return redirect('roles')->withStatus('Role successfully created.');
    }

    public function edit($id){

        $this->authorize('manage-users', User::class);

        return view('laravel-examples.roles.edit', ['role' => Role::find($id)]);
    }

    public function update($id){
        
        request()->validate([
            'name' => 'required|max:255|unique:roles,name,'.$id,
            'description' =>'required|min:5',
        ]);

        Role::find($id)->update(request()->all());

        return redirect('roles')->withStatus('Role successfully updated.');
    }

    public function destroy($id){
        if (!Role::find($id)->user->isEmpty()) {
            return redirect('roles')->withErrors('This role has users attached and can\'t be deleted.');
        }
        Role::find($id)->delete();
        return redirect('roles')->withStatus('Role successfully deleted.');
    }

}
