<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categoriesList()
    {
        // dd('Categories List');

        $category = Category::all();
        return view('Backend.Pages.Category.CategoriesList', compact('category'));
    }

    public function createNewCategoryForm()
    {
        // dd('Create New Category Form');

        return view('Backend.Pages.Category.CreateNewCategoriesForm');
    }

    public function categoryPost(Request $Category_Post)
    {
        // dd($Category_Post->all());

        Category::create([
            'category_id'=>$Category_Post->category_id,
            'category_name'=>$Category_Post->category_name,
            'category_description'=>$Category_Post->category_description
        ]);

        return redirect()->route('categories.list');

    }
}
