<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentManagementController extends Controller
{
    public function index(){
        
        // $this->authorize('manage-items', User::class);

        return view('laravel-examples.content.index');
    }

    public function create()
    {
        return view('content.create');
    }

    public function store(Request $request)
    {
        $grapesjsData = $request->input('grapesjsData');
        $grapesjsCss = $request->input('grapesjsCss');
        $grapesjsJs = $request->input('grapesjsJs');

        // Store the content as JSON
        $content = [
            'html' => $grapesjsData,
            'css' => $grapesjsCss,
            'js' => $grapesjsJs,
        ];

        $jsonContent = json_encode($content);

        // $data = $request->input('grapesjsData');
        // $data = json_decode($data);
        $content = new Content();
        $content->body = $jsonContent;
        $content->save();

        // Additional logic or response
        return redirect()->back()->with('success', 'GrapesJS data saved successfully.');
    }

    public function showGrapesjsData()
{
    $page = DB::table('pages')->latest()->first();
    // dd($page);
    $pageData = ($page->page_data);
    // dd($pageData);
    return view('laravel-examples.content.show', compact('pageData'));
    // $content = Content::latest()->first(); // Retrieve the latest content entry, you may adjust the logic to fetch the desired content
    // $grapesjsData = $content ? $content->body : null; // Get the grapesjsData from the content
    // $grapesjsData = json_decode($grapesjsData);
    // return view('laravel-examples.content.show', compact('grapesjsData'));
}
}
