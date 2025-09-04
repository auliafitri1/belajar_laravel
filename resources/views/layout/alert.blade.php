<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <div class="alert alert-warning alert-dismissible fade show">
    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div> -->

<!-- <div class="alert alert-{{$class}} alert-dismissible fade show">
 {{$slot}}
 <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
 </div> -->

<div class="alert alert-{{$class}} alert-dismissible fade show">
 {{$slot}}
 <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
 </div>

</body>
</html>