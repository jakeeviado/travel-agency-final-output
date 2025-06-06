<?php

namespace App\Http\Controllers;

use App\Models\tbl_serviceCategories;
use Illuminate\Http\Request;

class TblServiceCategoriesController extends Controller
{
    public function index()
    {
        $categories = tbl_serviceCategories::all();
        if ($categories->isEmpty()) {
            return redirect()->route('service_categories.create')->with('info', 'No categories found.');
        } else {
            return view('service_categories.index', compact('categories'));
        }
    }

    public function show($id)
    {
        $category = tbl_serviceCategories::findOrFail($id);
        if (!$category) {
            return redirect()->route('service_categories.index')->with('error', 'Category not found.');
        }
        return view('service_categories.show', compact('category'));
    }
}
