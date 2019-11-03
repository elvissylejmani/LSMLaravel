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
    <div class="row">
     <p class="h3">Search:  </p> &nbsp;
    <form action=""  method="get">
    <div class="input-group mb-3">
  <input type="text" class="form-control" name="Search" placeholder="Name" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="Submit" id="button-addon2">Search</button>
  </div>
</div>
    </form>
        <div class="col"></div>
         <div class="col col-sm-3 ml-10">
             <a href="/Roli"> <button type="button" class="btn btn-primary"> Shto Role </button> </a>
          </div>
     </div>
    </div>
    @if ($users->Count())
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