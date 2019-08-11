<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="librat" method="POST">
        @csrf
        <table>
        <th>Numri Serik</th>
        <td><input type="text" name="NumriSerik" value="{{ old('NumriSerik')}}" id=""></td>
        <th>Foto e Librit</th>
        <td> <input type="text" name="FotoLibrit" value="{{ old('FotoLibrit')}}" id=""></td>
        <th>Zhanri</th>
        <td>  <input type="text" name="ID_Zhanri" value="{{ old('ID_Zhanri')}}" id=""></td>
        <th>Titulli</th>
        <td> <input type="text" name="Titulli" value="{{ old('Titulli')}}" id=""></td>
        <th>Autori</th>
        <td> <input type="text" name="Autori" value="{{ old('Autori')}}" id=""></td>
        <th>Shtepia Botuese</th>
        <td> <input type="text" name="ID_ShtepiaBotuese" value="{{ old('ID_ShtepiaBotuese')}}" id=""></td>
        <th>Numri i Faqeve</th>
        <td> <input type="text" name="NumriIFaqeve" value="{{ old('NumriIFaqeve')}}" id=""></td>
        <th>Viti i Botimit</th>
        <td>  <input type="date" name="VitiIBotimit" value="{{ old('VitiIBotimit')}}" id=""></td>
        <th>Viti i Ribotimit</th>
        <td><input type="date" name="VitiIRibotimit" value="{{ old('VitiIRibotimit')}}" id=""></td>
        <th>Vellimi</th>
        <td><input type="text" name="Vellimi" value="{{ old('Vellimi')}}" id=""></td>
        <th>Rafti</th>
        <td><input type="text" name="ID_Rafti" value="{{ old('ID_Rafti')}}" id=""></td>
        <th>Statusi</th>
        <td><input type="text" name="Statusi" value="{{ old('Statusi')}}" id=""></td>
        <th>Numri i Lexuesve</th>
        <td><input type="text" name="NumriILexuesve" value="{{ old('NumriILexuesve')}}" id=""></td>
        <td><input type="submit" value="submit"> </td>
        
        @if ($errors->any())
        </table>
<div class="notification is-danger">

    
    <ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

</div>
@endif
    </form>

    
@if ($librat->Count())
Librat:
<ul>
    @foreach ($librat as $libri)
     <li>   {{$libri->NumriSerik}} </li>
      <li>   {{$libri->FotoLibrit}}  </li>
      <li> @foreach ($libri->zhanret as $zhanri)
        {{$zhanri->Zhanri}}
    @endforeach</li>
      <!-- <li>   {{$libri->ID_Zhanri}}</li> -->
      <li>   {{$libri->Titulli}}</li>
     <li>    {{$libri->Autori}}</li>
     <li> @foreach ($libri->ShtepiaBotuese as $shtepia)
        {{$shtepia->ShtepiaBotuese_Emri}}
    @endforeach</li>
      <li>   {{$libri->NumriIFaqeve}}</li>
     <li>    {{$libri->VitiIBotimit}}</li>
     <li> @if($libri->VitiIRibotimit == null) Nuk eshte ribotuar libri @else  {{$libri->VitiIRibotimit}} @endif</li>
      <li>   {{$libri->Vellimi}}</li>
     <li> @foreach ($libri->Rafti as $rafti)
        {{$rafti->Rafti}}
    @endforeach</li>
     <li>    {{$libri->NumriILexuesve}}</li>
     <li><a href="librat/{{$libri->id}}">Edit</a></li>   
     <li>
        <form action="librat/{{$libri->id}}" method="POST">
            @csrf
             @method('DELETE')
            <button type="submit">Delete</button>
         </form>
     </li> 
     
   @endforeach
    
</ul>
@endif
</body>
</html>
