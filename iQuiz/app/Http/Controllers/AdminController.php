<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard'); 
    }

    public function users()
    {
        return view('admin.users'); 
    }

    public function settings()
    {
        return view('admin.settings'); 
    }

    public function allCategory()
    {
        return view('admin.all-category');
    }

    public function showCategoryDeleteConfirmation($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.confirm-delete', compact('category'));
    }

    public function deleteCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.all-category')->with('success', 'Category deleted successfully!');
    }
}
