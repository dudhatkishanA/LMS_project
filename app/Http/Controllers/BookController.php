<?php

namespace App\Http\Controllers;
use App\Models\book;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book_list()
    {
        $book=book::get()->all();
        return view('booklist',compact('book'));
    }

    public function add_book()
    {
        return view('add_book');
    }

    public function insertBook(Request $request)
    {
        $request->validate([
            'book_name' => 'required',
        ]);
        $book = new book();
        $book->B_NAME = $request->book_name;
        $book->save();
        return redirect::to('/booklist');
    }
    public function editBook ($id)
    {
        $edit_data = book::where('id','=',$id)->first();
        return view('edit_book',compact('edit_data'));
    }

    public function updateBook(Request $request)
    {
        // dd($request);

       book::where('id','=', $request->book_id)
        ->update([
               'B_NAME' => $request->book_name,
        ]);
        return redirect::to('/booklist');
        
    }

    public function deleteBook($id)
    {
        book::where('id', $id)
        ->delete();
        return redirect::to('/booklist');

    }

}
