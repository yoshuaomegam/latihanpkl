<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog/home');
    }
    public function show($id)
    {
        $nilai='ini adalah linknya '. $id;
        //insert
        //DB::table('users')->insert(['username'=>'testing','password'=>'123ajds']);
        
        //update
       // DB::table('users')->where('username','yoshua')->update(['username'=>'sudahupdate']);
       

       //delete
       DB::table('users')->where('id','>',2)->delete();

       $users=DB::table('users')->get();
        return view('blog/single',['blog'=> $nilai,'users'=>$users]);
        

    }
}

