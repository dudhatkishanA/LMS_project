<?php

namespace App\Http\Controllers;
use App\Models\author;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class AutherController extends Controller
{
   
    public function author_list()
    {
        $author=author::get()->all();
        return view('authorlist',compact('author'));
    }

    public function add_author()
    {
        return view('add_author');
    }

    public function insertAuthor(Request $request)
    {
        $request->validate([
            'author_name' => 'required',
        ]);
        $author = new author();
        $author->A_NAME = $request->author_name;
        $author->save();
        return redirect::to('/authorlist');
    }
    public function editAuthor ($id)
    {
        $edit_data = author::where('id','=',$id)->first();
        return view('edit_author',compact('edit_data'));
    }

    public function updateAuthor(Request $request)
    {
        // dd($request);

       author::where('id','=', $request->author_id)
        ->update([
               'A_NAME' => $request->author_name,
        ]);
        
       

        return redirect::to('/authorlist');
        
    }

    public function deleteAuthor($id)
    {
        author::where('id', $id)
        ->delete();

        return redirect::to('/authorlist');
    }
}
