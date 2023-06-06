<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentManagementController extends Controller
{
    public function index(){
        
        // $this->authorize('manage-items', User::class);

        return view('laravel-examples.content.index');
    }
}
