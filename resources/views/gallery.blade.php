<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/mahasiswa">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dosen">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/gallery">Gallery</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="https://i.pinimg.com/736x/77/ab/79/77ab79f85f2832c72767fe9781986959.jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://i.pinimg.com/736x/16/6c/2d/166c2dcd9d0ca7997787d571845839ea.jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://i.pinimg.com/736x/d4/df/0f/d4df0f3e40e0012e8be9dfcdd5442ef7.jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="https://i.pinimg.com/1200x/70/87/a9/7087a9edd1b9798fe3cf23febc547354.jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="https://i.pinimg.com/736x/86/36/c2/8636c262bf5e422b3e3d2aa562265ed3.jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="https://i.pinimg.com/736x/d4/1f/d4/d41fd401e756f214323dee689d8b175c.jpg" class="img-thumbnail img-fluid">
        </div>
    </div>
</div>

<footer class="bg-dark py-4 text-white mt-4">
    <div class="container">
        Sistem Informasi Mahasiswa | Copyright © {{ date("Y") }} Duniailkom
    </div>
</footer>

</body>
</html>
