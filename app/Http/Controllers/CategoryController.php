<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_list = Category::all();
        return view("category.index_category", ["category_list" => $category_list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $action = action([CategoryController::class, "store"]);
        return view("category.create_category", ["action" => $action]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $validated = $request->validated();
        Category::create(["name" => $validated["name"]]);
        return redirect()->action([CategoryController::class, "index"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $action = action([CategoryController::class, "update"], ["category" => $category]);
        return view("category.edit_category", ["action" => $action, "category" => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validated = $request->validated();
        $category->name = $validated["name"];
        $category->save();
        return redirect()->action([CategoryController::class, "index"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
