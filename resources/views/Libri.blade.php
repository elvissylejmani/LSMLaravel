<?php 
use LSM\Libri;
?>
@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    ul {
        list-style-type: none;
    }
    </style>
</head>
<body>
    @section('content')
    <div class="container-fluid">

    <form action="librat" method="POST">
        @csrf
        <ul>
            <div class="row">
                    <nav class="navbar navbar-md navbar-light bg-white shadow-sm align-start border border rounded">
            <div class="col">
        <li class="nav-item">Numri Serik</li>
        <li><input type="text" name="NumriSerik" value="{{ old('NumriSerik')}}" id=""></li>
        <li>Foto e Librit</li>
        <li> <input type="text" name="FotoLibrit" value="{{ old('FotoLibrit')}}" id=""></li>
        <li>Zhanri</li>
        <li>  <input type="text" name="ID_Zhanri" value="{{ old('ID_Zhanri')}}" id=""></li>
    </div>
            <div class="col">
        <li>Titulli</li>
        <li> <input type="text" name="Titulli" value="{{ old('Titulli')}}" id=""></li>
        <li>Autori</li>
        <li> <input type="text" name="Autori" value="{{ old('Autori')}}" id=""></li>
        <li>Shtepia Botuese</li>
        <li> <input type="text" name="ID_ShtepiaBotuese" value="{{ old('ID_ShtepiaBotuese')}}" id=""></li>
    </div>

<div class="col">
       
            
            @foreach($librat as $libri)
            @foreach($libri->ShtepiaBotuese as $shtepia)
            @if ($shtepia != null)
            <li>
            <option value="">Shtepia Botuese</option>
            <option value="{{$shtepia->ShtepiaBotuese_Emri}}">{{$shtepia->ShtepiaBotuese_Emri}}</option>
            </li>
            @endif
            @endforeach
            @endforeach
        




        <li>Numri i Faqeve</li>
        <li> <input type="text" name="NumriIFaqeve" value="{{ old('NumriIFaqeve')}}" id=""></li>
        <li>Viti i Botimit</li>
        <li>  <input type="date" name="VitiIBotimit" value="{{ old('VitiIBotimit')}}" id=""></li>
    </div>
<div class="col">
        <li>Viti i Ribotimit</li>
        <li><input type="date" name="VitiIRibotimit" value="{{ old('VitiIRibotimit')}}" id=""></li>
        <li>Vellimi</li>
        <li><input type="text" name="Vellimi" value="{{ old('Vellimi')}}" id=""></li>
        <li>Rafti</li>
        <li><input type="text" name="ID_Rafti" value="{{ old('ID_Rafti')}}" id=""></li>
    </div>

    <div class="col">
        <li>Statusi</li>
        <li><input type="text" name="Statusi" value="{{ old('Statusi')}}" id=""></li>
        <li>Numri i Lexuesve</li>
        <li><input type="text" name="NumriILexuesve" value="{{ old('NumriILexuesve')}}" id=""></li>
        <li><input type="submit" value="submit"> </li>
    </div>
    </nav>
</div>
</ul>
        @if ($errors->any())
<div class="notification is-danger">

    
    <ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

</div>
@endif
</div>
    </form>
</div>
@if ($librat->Count())
Librat:
<ul>
    @foreach ($librat as $libri)
     <li>   {{$libri->NumriSerik}} </li>
      <li>   {{$libri->FotoLibrit}}  </li>
      <li> @foreach (Libri::findOrFail($libri->id)->Zhanret as $zhanri)
        {{$zhanri->Zhanri}}
    @endforeach         </li>
      <!-- <li>   {{$libri->ID_Zhanri}}</li> -->
      <li>   {{$libri->Titulli}}</li>
     <li>    {{$libri->Autori}}</li>
    <li> @foreach (Libri::findOrFail($libri->id)->ShtepiaBotuese as $shtepia)
        {{$shtepia->ShtepiaBotuese_Emri}}
    @endforeach         </li>
      <li>   {{$libri->NumriIFaqeve}}</li>
     <li>    {{$libri->VitiIBotimit}}</li>
     <li> @if($libri->VitiIRibotimit == null) Nuk eshte ribotuar libri @else  {{$libri->VitiIRibotimit}} @endif</li>
      <li>   {{$libri->Vellimi}}</li>
    <li> @foreach (Libri::findOrFail($libri->id)->Rafti as $rafti)
        {{$rafti->Rafti}}
    @endforeach         </li>
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

@endsection
</body>
</html>
