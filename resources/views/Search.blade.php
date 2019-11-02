@extends('layouts.app')
<?php
use LSM\User;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
</head>
<body>
@section('content')
    <div class="container">
    
    <h4>Search</h4>
    <div class="Search" style="float: left">
    <form action=""  method="get">
        <input type="text" name="Search">
        <input type="submit" value="Sumit">
    </form>
</div>
        <a href="/Roli"> <h4>Shto Role:</h4> </a>
    @if ($users->Count())
    <!--<div class="users" style="float:left"> -->
        <div class="container">
        <div class="row">
<div class="col-sm">
        <p class="h1"> Userat:</p>
        </div>
        </div>
        </div>
        <div class="container">
     <div class="row align-items-start">
    @foreach ($users as $user)
   
        <div class="col-md-4 mb-3">
        <nav class="navbar navbar-md navbar-light bg-white shadow-sm align-start border border-primary rounded">
     <ul class="navbar-nav auto">

    <li class="nav-item">   {{$user->Emri}} </li> 
    <li class="nav-item">   {{$user->Mbiemri}}  </li>
    <li class="nav-item">   {{$user->NrPersonal}}</li>
    <li class="nav-item">   {{$user->NrIdentifikues}}</li>
    <li class="nav-item">    {{$user->DataELindjes}}</li>
    <li class="nav-item"> @foreach (User::findOrFail($user->id)->Roli as $roli)
        {{$roli->Roli}}
    @endforeach</li>
     @if ($user->Librat != null)<li class="nav-item" >{{$user->Librat}}</li>@endif
     <li class="nav-item">   {{$user->email}}</li>
     <li class="nav-item mr-auto">  <a href="Admin/{{$user->id}}" class="float-left"><button type="button" class="btn btn-primary float-left">Edit</button></a>
     <form action="Admin/{{$user->id}}" method="POST" class="float-right">
       @csrf
       @method('DELETE') 
       <button type="submit" class="btn btn-danger float-right" >Delete</button>
    </form></li>
</ul>
        </nav>
        </div>
   @endforeach
   </div>
</div>
@endif
<!--</div> -->
</div>
@endsection

</body>
</html>