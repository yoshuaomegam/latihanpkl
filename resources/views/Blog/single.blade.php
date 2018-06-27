
@extends('layouts.master')


@section('title', 'blog sekolah koding')

@section('content')
<h1>Selamat datang di Blog kami</h1>  
<h2>Selamat Datang tolol</h2>
<h3>{{$blog}}</h3>

  @foreach($users as $user)
  <li>
      {{$user->username}}
  </li>
  @endforeach

@if(count($users)>5)
<p>user lebih dari 5</p>
@else
<p>User kurang dari 5</p>
@endif

@endsection