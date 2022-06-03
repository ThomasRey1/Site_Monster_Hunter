<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            width: 70%;
            margin: auto;
        }
    </style>
</head>

<body>
    <!-- slider container -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!-- slide 1 -->
            <div id="image1" class="carousel-item active">
                <img src="{{ asset('image/img_chania.jpg') }}" alt="" />
                <a href="{{ route('home') }}">s</a>
            </div>

            <!-- slide 2 -->
            <div id="image2" class="carousel-item">
                <img src="{{ asset('image/img_chania2.jpg') }}" alt="" />
            </div>

            <!-- slide 3 -->
            <div id="image3" class="carousel-item">
                <img src="{{ asset('image/img_flower.jpg') }}" alt="" />
            </div>

            <!-- slide 4 -->
            <div id="image4" class="carousel-item">
                <img src="{{ asset('image/img_flower2.jpg') }}" alt="" />
            </div>

            <!-- Control buttons -->
            <button onclick="moveLeft()" class="btn btn-next">left</button>
            <button onclick="moveRight()" class="btn btn-prev">right</button>
        </div>
    </div>
</body>
<script src="{{ asset('/js/carousel.js') }}"></script>
</html>