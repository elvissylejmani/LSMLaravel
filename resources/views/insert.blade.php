@extends('layouts.app')

@section('content')

<form action="Admin" method="POST">
        @csrf
        <input type="text" name="Emri" value="{{ old('Emri')}}" id="">
        <input type="text" name="Mbiemri" value="{{ old('Mbiemri')}}" id="">
        <input type="text" name="NrPersonal" value="{{ old('NrPersonal')}}" id="">
        <input type="text" name="NrIdentifikues" value="{{ old('NrIdentifikues')}}" id="">
        <input type="date" name="DataELindjes" value="{{ old('DataELindjes')}}" id="">
        <input type="text" name="ID_Roli" value="{{ old('ID_Roli')}}" id="">
        <input type="email" name="email" value="{{ old('email')}}" id="">
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
@endsection