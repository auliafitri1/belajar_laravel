<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="foreach_loop"> <!--ForEach Loop-->
      <div class="container text-center mt-3 pt-3 bg-white">
          <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
          <br>
          @foreach ($nilai as $val)
              @if ($val >= 0 && $val < 50)
                  <div class="alert alert-danger d-inline-block">{{ $val }}</div>
              @elseif ($val >= 50 && $val <= 100)
                  <div class="alert alert-success d-inline-block">{{ $val }}</div>
              @else
                  <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
              @endif
          @endforeach
      </div>
    </div>
</body>
</html>