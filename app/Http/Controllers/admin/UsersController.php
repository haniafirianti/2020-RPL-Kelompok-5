<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('DisablePreventBack');
    }

     public function index(){
        $user=Users::all();
    	return view('admin/users/index', ['user' => $user]);
    }

    public function add_users(){
    	return view('admin/users/add-user');
    }

    public function save_users(Request $request){
        $this->validate($request, [
            'user_email'        => 'required|string|max:255|unique:users,user_email',
            'user_full_name'    => 'required',
            'user_password'     => 'required|string|min:8|same:password_confirmation',
            ]);
    	$user = new Users;
    	$user->save_users($request->all());
    	return redirect('/users');
    }


    public function edit_users($user_id){
    	$user=Users::find($user_id);
    	return view('admin/users/edit-user', ['user' => $user]);
    }

    public function update_users(Request $request, $user_id){
    	$user = Users::find($user_id);
    	$user->update_users($request->all());
    	return redirect('/users/');
    }

    public function destroy($user_id)
    {
        $user = Users::find($user_id);
        $user->delete();
        return redirect('/users/');
    }


}
