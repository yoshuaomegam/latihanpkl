<?php

namespace App\Http\Controllers;

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
        $users=['yoshua','linggar','kifly'];
        return view('blog/single',['blog'=> $nilai,'users'=>$users]);
    }
}

