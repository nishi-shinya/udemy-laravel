<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($id)
    {
        return 'its working' . $id;
    }
    
    public function create()
    {
        
    }
    
    public function store(Request $request)
    {
        
    }
    
    public function show($id)
    {
        return 'show' . $id;
        
    }
    
    public function contact()
    {
        $people = ['Edwin', 'Jose'];
        
        return view('pages.contact', compact('people'));
    }
}
