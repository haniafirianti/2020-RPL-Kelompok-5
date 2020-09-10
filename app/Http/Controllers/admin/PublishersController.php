<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publishers;

class PublishersController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('DisablePreventBack');
    }

    public function index(){
        $publisher=Publishers::all();
    	return view('admin/publishers/index', ['publishers' => $publisher]);
    }

    public function add_publishers(){
    	return view('admin/publishers/add-publisher');
    }

    public function save_publishers(Request $request){
        $this->validate($request, [
            'publisher_name'    => 'required|unique:publishers,publisher_name',
            'publisher_address' => 'required',
            ]);
        
    	$publisher = new Publishers;
    	$publisher->save_publishers($request->all());
    	return redirect('/publishers');
    }


    public function edit_publishers($publisher_id){
    	$publisher=Publishers::find($publisher_id);
    	return view('admin/publishers/edit-publisher', ['publisher' => $publisher]);
    }

    public function update_publishers(Request $request, $publisher_id){
        $this->validate($request, [
            'publisher_address' => 'required',
            ]);
        
    	$publisher = Publishers::find($publisher_id);
    	$publisher->update_publishers($request->all());
    	return redirect('/publishers');
    }

}
