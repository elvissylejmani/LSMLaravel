<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/Admin" method="POST">
        @csrf
        <input type="text" name="Emri" id="">
        <input type="text" name="Mbiemri" id="">
        <input type="text" name="NrPersonal" id="">
        <input type="text" name="NrIndetifikues" id="">
        <input type="date" name="DataELindjes" id="">
        <input type="email" name="Email" id="">
        <input type="password" name="password" id="">
        <input type="confirmed" name="password" id="">
    </form>
</body>
</html>