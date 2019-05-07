<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CreateCategoryRequest;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }
    public function store(CreateCategoryRequest $request)
    {
        \Auth::user()->categories()->create([
            'title'=>$request->title
        ]);

        return redirect()->route('category.index');
    }
    public function index()
    {
        $categories = \Auth::user()->categories;

        return view('categories.index', compact('categories'));
    }
}
