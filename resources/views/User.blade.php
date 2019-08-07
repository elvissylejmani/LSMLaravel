<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
@if ($users->Count())
Userat:
<ul>
    @foreach ($users as $user)
     <li>   {{$user->Emri}} </li>
      <li>   {{$user->Mbiemri}}  </li>
      <li>   {{$user->NrPersonal}}</li>
      <li>   {{$user->NrIdentifikues}}</li>
     <li>    {{$user->DataELindjes}}</li>
     <li> @foreach ($user->roli as $roli)
        {{$roli->Roli}}
    @endforeach</li>
     @if ($user->Librat != null)<li>{{$user->Librat}}</li>@endif
     <li>   {{$user->Email}}</li>
     <li><a href="{{$user->id}}/edit">Edit</a></li>
    
   @endforeach
     
     
     
</ul>
@endif
</body>
</html>