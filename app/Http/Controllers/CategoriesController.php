<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categories = Category::all();
       
    return view("admin.categories.index",compact("categories"));
    
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categories.create");


        


    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        "name"=>"required|max:100|unique:categories"
        
    ]);
    category::create($request->all());
    return redirect()->route("categories.index");
    }
   
    

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->route("categories.index")->with("message Une nouvelle categorie est ajoutée avec succés!");
    }
}
