<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
  <h1>Selamat datang di Blog kami</h1>  
  <h2>Selamat Datang tolol</h2>
<h3>{{$blog}}</h3>

    @foreach($users as $user)
    <li>
        {{$user}}
    </li>
    @endforeach
</body>
</html>