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
    <div class="container">

    <form action="librat" method="POST">
        @csrf
            <div class="row justify-content-md-center">
                    <nav class="navbar navbar-md navbar-light bg-white shadow-sm align-start border border rounded">
    <div class="col">
    </div>          
                        <div class="col col-md-12">
       
        <input type="text" name="NumriSerik" class="form-control mb-4 {{$errors->has('NumriSerik') ? 'border border-danger' : ''}}" value="{{ old('NumriSerik')}}" placeholder="NumriSerik" aria-label="Username" aria-describedby="basic-addon1">
        
        <input type="text" name="FotoLibrit" class="form-control mb-4 {{$errors->has('FotoLibrit') ? 'border border-danger' : ''}}" value="{{ old('FotoLibrit')}}" placeholder="Foto e Librit" aria-label="Username" aria-describedby="basic-addon1">
       
        <input type="text" name="ID_Zhanri" class="form-control mb-4 {{$errors->has('ID_Zhanri') ? 'border border-danger' : ''}}" value="{{ old('ID_Zhanri')}}" placeholder="ID e zhanrit" aria-label="Username" aria-describedby="basic-addon1">
        
        
        <input type="text" name="Titulli" class="form-control mb-4 {{$errors->has('Titulli') ? 'border border-danger' : ''}}" value="{{ old('Titulli')}}" placeholder="Titulli" aria-label="Username" aria-describedby="basic-addon1">
        
        <input type="text" name="Autori" class="form-control mb-4 {{$errors->has('Autori') ? 'border border-danger' : ''}}" value="{{ old('Autori')}}" placeholder="Autori" aria-label="Username" aria-describedby="basic-addon1">
        

       
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">ShtepiaBotuese</label>
                </div>
                <select class="custom-select" name="ID_ShtepiaBotuese" id="inputGroupSelect01">
            @if ($Shtepia != null)
            <option value=""></option>
            @foreach($Shtepia as $shtepia)
            {{-- <select class="custom-select mb-4" name="Category" id="">
                    <p>ShtepiaBotuese</p>
                    <option value=""></option>
            <option value="{{$shtepia->ShtepiaBotuese_Emri}}">{{$shtepia->ShtepiaBotuese_Emri}}</option>
        </select>     --}}
       
                        
                   
                        <option value="{{$shtepia->id}}">{{$shtepia->ShtepiaBotuese_Emri}}</option>
               
            @endforeach
            @endif
        </select>
    </div>




        <input type="text" name="NumriIFaqeve" class="form-control mb-4 {{$errors->has('NumriIFaqeve') ? 'border border-danger' : ''}}" value="{{ old('NumriIFaqeve')}}" placeholder="NumriIFaqeve" aria-label="Username" aria-describedby="basic-addon1">

        <input type="date" name="VitiIBotimit" class="form-control mb-4 {{$errors->has('VitiIBotimit') ? 'border border-danger' : ''}}" value="{{ old('VitiIBotimit')}}" placeholder="VitiIBotimit" aria-label="Username" aria-describedby="basic-addon1">
        <input type="date" name="VitiIRibotimit" class="form-control mb-4 {{$errors->has('VitiIRibotimit') ? 'border border-danger' : ''}}" value="{{ old('VitiIRibotimit')}}" placeholder="Viti i ribotimit" aria-label="Username" aria-describedby="basic-addon1">

        <input type="text" name="Vellimi" class="form-control mb-4 {{$errors->has('Vellimi') ? 'border border-danger' : ''}}" value="{{ old('Vellimi')}}" placeholder="Vellimi" aria-label="Username" aria-describedby="basic-addon1">
        
        <input type="text" name="ID_Rafti" class="form-control mb-4 {{$errors->has('ID_Rafti') ? 'border border-danger' : ''}}" value="{{ old('ID_Rafti')}}" placeholder="ID_Rafti" aria-label="Username" aria-describedby="basic-addon1">

        <input type="text" name="Statusi" class="form-control mb-4 {{$errors->has('Statusi') ? 'border border-danger' : ''}}" value="{{ old('Statusi')}}" placeholder="Statusi" aria-label="Username" aria-describedby="basic-addon1">

        <input type="text" name="NumriILexuesve" class="form-control mb-4 {{$errors->has('NumriILexuesve') ? 'border border-danger' : ''}}" value="{{ old('NumriILexuesve')}}" placeholder="NumriILexuesve" aria-label="Username" aria-describedby="basic-addon1">

        <button type="Submit" class="btn btn-primary">Shto</button>
    </div>
    <div class="col"></div>
    </nav>
</div>
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
