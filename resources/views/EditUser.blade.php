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
<li><input type="text" name="" id="" value="{{$user->Emri}}"></li>
<li><input type="text" name="" id="" value="{{$user->Mbiemri}}"></li>
<li><input type="text" name="" id="" value="{{$user->NrPersonal}}"></li>
<li><input type="text" name="" id="" value="{{$user->NrIdentifikues}}"></li>
<li><input type="text" name="" id="" value="{{$user->DataELindjes}}"></li>
<li><input type="text" name="" id="" value="{{$user->ID_Roli}}
{{-- (@foreach($user->roli as $roli)
{{$roli->Roli}}

@endforeach) --}} ">
</li>
<li><input type="text" name="" id="" value="@if($user->Librat == null) Nuk ka Libra @else {{$user->Librat}}@endif"></li>
<li><input type="text" name="" id="" value="{{$user->Email}}"></li>
</ul>


<input type="submit" value="submit">
</form>

</body>
</html>