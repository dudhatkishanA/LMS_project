<?php

namespace App\Http\Controllers;
use App\Models\bookissue;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class BookissueController extends Controller
{
    public function bookissue_list()
    {
        $bookissue=bookissue::get()->all();
        return view('bookissuelist',compact('bookissue'));
    }

    public function add_bookissue()
    {
        return view('add_bookissue');
    }

    public function insertBookissue(Request $request)
    {
        $request->validate([
            'bookissue_name' => 'required',
        ]);
        $bookissue = new bookissue();
        $bookissue->B_NAME = $request->bookissue_name;
        $bookissue->save();
        return redirect::to('/bookissuelist');
    }
    public function editBookissue ($id)
    {
        $edit_data = bookissue::where('id','=',$id)->first();
        return view('edit_bookissue',compact('edit_data'));
    }

    public function updateBookissue(Request $request)
    {
        // dd($request);

       bookissue::where('id','=', $request->student_id)
        ->update([
               'B_NAME' => $request->bookissue_name,
        ]);
        return redirect::to('/bookissuelist');
        
    }

    public function deleteBookissue($id)
    {
        bookissue::where('id', $id)
        ->delete();
        return redirect::to('/bookissuelist');

    }
}
