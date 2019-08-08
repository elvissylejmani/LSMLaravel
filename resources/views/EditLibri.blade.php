<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="{{$libri->id}}" method="POST">
@csrf
@method('PATCH')
<ul>
<li><input type="text" name="NumriSerik" id="" value="{{$libri->NumriSerik}}"></li>
<li><input type="text" name="FotoLibrit" id="" value="{{$libri->FotoLibrit}}"></li>
<li><input type="text" name="ID_Zhanri" id="" value="{{$libri->ID_Zhanri}}"></li>
<li><input type="text" name="Titulli" id="" value="{{$libri->Titulli}}"></li>
<li><input type="text" name="Autori" id="" value="{{$libri->Autori}}"></li>
<li><input type="text" name="ID_ShtepiaBotuese" id="" value="{{$libri->ID_ShtepiaBotuese}}
{{-- (@foreach($libri->zhanret as $zhanri)
{{$zhanri->Zhanri}}

@endforeach) --}} ">
</li>
<li><input type="text" name="NumriIFaqeve" id="" value="{{$libri->NumriIFaqeve}}"></li>
<li><input type="text" name="VitiIBotimit" id="" value="{{$libri->VitiIBotimit}}"></li>
<li><input type="text" name="VitiIRibotimit" id="" value="{{$libri->VitiIRibotimit}}"></li>
<li><input type="text" name="Vellimi" id="" value="{{$libri->Vellimi}}"></li>
<li><input type="text" name="ID_Rafti" id="" value="{{$libri->ID_Rafti}}
{{-- (@foreach($libri->Rafti as $rafti)
{{$rafti->Rafti}}

@endforeach) --}} ">
</li>
<li><input type="text" name="Statusi" id="" value="{{$libri->Statusi}}"></li>
<li><input type="text" name="NumriILexuesve" id="" value="{{$libri->NumriILexuesve}}"></li>
</ul>


<input type="submit" value="submit">
</form>

</body>
</html>