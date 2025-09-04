<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('header')

<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="https://source.unsplash.com/F8t2VGnI47I/350x250" class="img-thumbnail img-fluid">
        </div>
    </div>
</div>

@include('footer')

</body>
</html>