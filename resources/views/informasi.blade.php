<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout.master')
 @section('title','Informasi Fakultas')

 @section('content')
 <div class="container text-center mt-3 p-4 bg-white">
 <h1>Informasi Fakultas {{$data[0]}}, Jurusan {{$data[1]}}</h1>
 </div>
 @endsection
</body>
</html>