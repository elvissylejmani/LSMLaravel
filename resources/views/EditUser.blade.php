<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{$user->id}}" method="POST">
@csrf
@method('PATCH')
<ul>
<li><input type="text" name="Emri" id="" value="{{$user->Emri}}"></li>
<li><input type="text" name="Mbiemri" id="" value="{{$user->Mbiemri}}"></li>
<li><input type="text" name="NrPersonal" id="" value="{{$user->NrPersonal}}"></li>
<li><input type="text" name="NrIdentifikues" id="" value="{{$user->NrIdentifikues}}"></li>
<li><input type="date" name="DataELindjes" id="" value="{{$user->DataELindjes}}"></li>
<li><input type="text" name="ID_Roli" id="" value="{{$user->ID_Roli}}
 ">->(@foreach($user->roli as $roli)
{{$roli->Roli}}
@endforeach)
</li>
@if ($user->Librat != null)
<li><input type="text" name="Librat" id="" value="{{$user->Librat}}"></li>
@endif
<li><input type="text" name="Email" id="" value="{{$user->Email}}"></li>
</ul>
<input type="submit" value="submit">
</form>
</body>
</html>