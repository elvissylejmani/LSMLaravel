<?php
use LSM\Roli;
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
    <form action="/Roli" method="POST">
        @csrf
        <input type="text" name="Roli" value="{{ old('Roli')}}" id="">
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
    @if ($roli->Count())
    <div class="users"> 
Rolet:
<ul>
    @foreach ($roli as $roli)
    <li>   {{$roli->id}} </li>
    <li>   {{$roli->Roli}} </li>
    <li> <form action="Roli/{{$roli->id}}" method="POST">
       @csrf
       @method('DELETE') 
       <li><a href="Roli/{{$roli->id}}">Edit</a></li>
       <button type="submit">Delete</button>
    </form></li>
   @endforeach
     
     
     
</ul>
@endif
</div>
</body>
</html>