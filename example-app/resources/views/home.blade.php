<?php

use function PHPUnit\Framework\isEmpty;

session_start();
if (isEmpty($_SESSION['isConnected'])) {
    $_SESSION['isConnected'] = false;
}
?>

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
    <div>
        @include('include.header')
    </div>
    <!-- slider container -->
    <div class="duration-75 dark:bg-gray-700">
        <div class="flex">
        <input id="leftBtn" type="button" value="Left">
            <!-- slide 1 -->
            <div id="carouselImage1" class="flex-initial w-[200px] h-[200px]">
                <img src="{{ asset('image/img_chania.jpg') }}" alt="Image monstre" />
                <a href="">à l'aide 1</a>
            </div>

            <!-- slide 2 -->
            <div id="carouselImage2" class="flex-initial w-[200px] h-[200px]">
                <img src="{{ asset('image/img_chania2.jpg') }}" alt="Image arme" />
                <a href="">à l'aide 2</a>
            </div>

            <!-- slide 3 -->
            <div id="carouselImage3" class="flex-initial w-[200px] h-[200px]">
                <img src="{{ asset('image/img_flower.jpg') }}" alt="Image " />
                <a href="">à l'aide 3</a>
            </div>
        <!-- Control buttons -->
        <input id="rightBtn" type="button" value="Right">
        </div>
    </div>
</body>
<script src="{{ asset('js/carousel.js') }}"></script>
</html>