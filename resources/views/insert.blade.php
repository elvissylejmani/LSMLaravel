@extends('layouts.app')

@section('content')
<div class="container">
    <form action="Admin" method="POST">
        @csrf
            <div class="row">
                <div class="col"></div>
            <div class="col col-md-5">
            <nav class="navbar navbar-md navbar-light bg-white shadow-sm align-start border border rounded">
                    <p class="h3 text-center ml-4"> Shto Student</p>
              <input type="text" name="Emri" class="form-control mb-4" value="{{ old('Emri')}}" placeholder="Emri" aria-label="Username" aria-describedby="basic-addon1">
               
            <input type="text" name="Mbiemri" value="{{ old('Mbiemri')}}"  class="form-control mb-4" placeholder="Mbiemri" aria-label="Username" aria-describedby="basic-addon1"> 
                <input type="text" name="NrPersonal" class="form-control mb-4" value="{{ old('NrPersonal')}}" placeholder="ID" aria-label="Username" aria-describedby="basic-addon1">
                <input type="text" name="NrIdentifikues" value="{{ old('NrIdentifikues')}}" class="form-control mb-4" placeholder="NrIdentifikues" aria-label="Username" aria-describedby="basic-addon1">
                <input type="date" name="DataELindjes" value="{{ old('DataELindjes')}}" class="form-control mb-4" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                <input type="text" name="ID_Roli" value="{{ old('ID_Roli')}}"  class="form-control mb-4" placeholder="Roli" aria-label="Username" aria-describedby="basic-addon1">
        <input type="email" name="email" value="{{ old('email')}}" class="form-control mb-4" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
        <input type="password" name="password" value="{{ old('password')}}" class="form-control mb-4 {{$errors->has('password') ? 'border border-danger' : ''}}" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
        <input type="password" name="password_confirmation" value="{{ old('password')}}" class="form-control mb-4" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
          <button type="Submit" class="btn btn-primary">Shto</button>
            </nav>
        </div>
       <div class="col"></div>
    </div>
    </form>
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
@endsection