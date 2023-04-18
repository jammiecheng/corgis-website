<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function signup(){
        return view('users.signup');
    }

    public function userstore(Request $request){
        DB::table('users')->insert([
            'name' => $request->input('name'),
            'birth' => $request->input('birth'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
        return redirect('/usercreated');
    }

    public function updatepage(){
        return view('users.update');
    }

    public function userupdated(Request $request){
        DB::table('users')->where([
            'name' => $request->input('name')])
            ->update(['password' => $request->input('password')]);
        return redirect('/userupdated');
    }

    public function deletepage(){
        return view('users.delete');
    }

    public function userdeleted(Request $request){
        DB::table('users')->delete(['id' => $request->input('id')]);
        return redirect('/userdeleted');
    }
}
