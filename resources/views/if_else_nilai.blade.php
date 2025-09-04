<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="if_else_nilai"> <!-- Ini If Else Nilai -->
    <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
   <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ implode(', ', $nilai) }}</h1>
   
   
    <br>
    <?php
    if (($nilai >= 0) and ($nilai < 50))
    {
    ?>
    <div class="alert alert-danger d-inline-block">
    Maaf, anda tidak lulus
    </div>
    <?php
    }
    else if (($nilai >= 50) and ($nilai <= 100))
    {
    ?>
    <div class="alert alert-success d-inline-block">
    Selamat, anda lulus
    </div>
    <?php
    }
    ?>
    </div>
  </div>
</body>
</html>