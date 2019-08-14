<?php
use LSM\User;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Admin" method="POST">
        @csrf
        <input type="text" name="Emri" value="{{ old('Emri')}}" id="">
        <input type="text" name="Mbiemri" value="{{ old('Mbiemri')}}" id="">
        <input type="text" name="NrPersonal" value="{{ old('NrPersonal')}}" id="">
        <input type="text" name="NrIdentifikues" value="{{ old('NrIdentifikues')}}" id="">
        <input type="date" name="DataELindjes" value="{{ old('DataELindjes')}}" id="">
        <input type="text" name="ID_Roli" value="{{ old('ID_Roli')}}" id="">
        <input type="email" name="Email" value="{{ old('Email')}}" id="">
        <input type="password" name="password" value="{{ old('password')}}" id="">
        <input type="submit" value="submit">
    </form>
        @if ($errors->any())
<div class="notification is-danger">

    
    <ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

</div>

@endif
    </form>
    <h4>Search</h4>
    <div class="Search" style="float: left">
    <form action="" method="get">
        <input type="text" name="Search">
        <input type="submit" value="Sumit">
    </form>
</div>

        <div style="float: right; margin-right:50rem">
<h4>Shto Role:</h4>

        <form action="" method="GET">
            <input type="text" name="Roli">
            <input type="submit" value="save">
        </form>
        </div>
    @if ($users->Count())
    <div class="users" style="float:left">
Userat:
<ul>
    @foreach ($users as $user)
     <li>   {{$user->Emri}} </li>
      <li>   {{$user->Mbiemri}}  </li>
      <li>   {{$user->NrPersonal}}</li>
      <li>   {{$user->NrIdentifikues}}</li>
     <li>    {{$user->DataELindjes}}</li>
     <li> @foreach (User::findOrFail($user->id)->Roli as $roli)
        {{$roli->Roli}}
    @endforeach</li>
     @if ($user->Librat != null)<li>{{$user->Librat}}</li>@endif
     <li>   {{$user->Email}}</li>
     <li><a href="Admin/{{$user->id}}">Edit</a></li>
     <li> <form action="Admin/{{$user->id}}" method="POST">
       @csrf
       @method('DELETE') 
       <button type="submit">Delete</button>
    </form></li>
   @endforeach
     
     
     
</ul>
@endif
</div>
</body>
</html>