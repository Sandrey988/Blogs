<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.categories.index', [
           'categories' => Category::paginate(10)
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Category $category)
    {

    }

    public function edit(Category $category)
    {

    }

    public function update(Request $request, Category $category)
    {

    }

    public function destroy(Category $category)
    {

    }
}
