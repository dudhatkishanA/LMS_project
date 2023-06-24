<?php

namespace App\Http\Controllers;
use App\Models\publisher;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function publisher_list()
    {
        $publisher=publisher::get()->all();
        return view('publisherlist',compact('publisher'));
    }

    public function add_publisher()
    {
        return view('add_publisher');
    }

    public function insertPublisher(Request $request)
    {
        $request->validate([
            'publisher_name' => 'required',
        ]);
        $publisher = new publisher();
        $publisher->P_NAME = $request->publisher_name;
        $publisher->save();
        return redirect::to('/publisherlist');
    }
    public function editPublisher ($id)
    {
        $edit_data = publisher::where('id','=',$id)->first();
        return view('edit_publisher',compact('edit_data'));
    }

    public function updatePublisher(Request $request)
    {
         //dd($request);

       publisher::where('id','=', $request->publisher_id)
        ->update([
               'P_NAME' => $request->publisher_name,
        ]);
        
       

        return redirect::to('/publisherlist');
        
    }

    public function deletePublisher($id)
    {
        publisher::where('id', $id)
        ->delete();

        return redirect::to('/publisherlist');

    }


}
