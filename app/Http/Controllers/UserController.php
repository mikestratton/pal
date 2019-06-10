<?php

namespace PAL\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PAL\User;

class UserController extends Controller
{
    public function index(){

        $auth = Auth::user();
        $users = User::orderBy('updated_at', 'desc')->paginate(10);


        if($auth->role_id == 1){
            return view('admin.users.index', compact('users'));
        }

        return abort('404');
    }


    public function approve(Request $request){

        $id = $request->id;

        DB::table('users')
            ->where('id', $id)
            ->update(['is_active' => $request->is_active]);

        return redirect('users');
    }


}
