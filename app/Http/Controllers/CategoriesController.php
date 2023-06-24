<?php

namespace App\Http\Controllers;
use App\Models\categories;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories_list()
    {
        $categories=categories::get()->all();
        return view('categorieslist',compact('categories'));
    }

    public function add_categories()
    {
        return view('add_categories');
    }

    public function insertCategories(Request $request)
    {
        $request->validate([
            'categories_name' => 'required',
        ]);
        $categories = new categories();
        $categories->C_NAME = $request->categories_name;
        $categories->save();
        return redirect::to('/categorieslist');
    }
    public function editCategories ($id)
    {
        $edit_data = categories::where('id','=',$id)->first();
        return view('edit_categories',compact('edit_data'));
    }

    public function updateCategories(Request $request)
    {
        // dd($request);

       categories::where('id','=', $request->categories_id)
        ->update([
               'C_NAME' => $request->categories_name,
        ]);
        return redirect::to('/categorieslist');
        
    }

    public function deleteCategories($id)
    {
        categories::where('id', $id)
        ->delete();
        return redirect::to('/categorieslist');

    }

}
