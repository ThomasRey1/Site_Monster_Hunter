@extends('include.template')
@section('mainContent')
<!-- slider container 
<div class="duration-[0.5s] content-center">
    <div class="flex">
        <input id="leftBtn" type="button" value="Left">
        <!-- slide 1 
        <div id="carouselImage1" class="flex-initial w-[200px] h-[200px]">
            <img src="{{ asset('image/img_chania.jpg') }}" alt="Image monstre" />
            <a href="">à l'aide 1</a>
        </div>

        <!-- slide 2 
        <div id="carouselImage2" class="flex-initial w-[200px] h-[200px]">
            <img src="{{ asset('image/img_chania2.jpg') }}" alt="Image arme" />
            <a href="">à l'aide 2</a>
        </div>

        <!-- slide 3 
        <div id="carouselImage3" class="flex-initial w-[200px] h-[200px]">
            <img src="{{ asset('image/img_flower.jpg') }}" alt="Image " />
            <a href="">à l'aide 3</a>
        </div>
        <!-- Control buttons 
        <input id="rightBtn" type="button" value="Right">
    </div>
</div>-->

<div class="max-w-[1000px] relative m-auto mt-[50px]">
<div class="mySlides hidden animate-fade duration-[1.5s]">
    <img src="{{ asset('image/img_chania.jpg') }}" style="width:100%">
    <div class="absolute text-[#f2f2f2] text-[15px] py-[8px] px-[12px] bottom-[8px] w-[100%] text-center">Caption Text</div>
  </div>

  <div class="mySlides hidden animate-fade duration-[1.5s]">
    <img src="{{ asset('image/img_chania2.jpg') }}" style="width:100%">
    <div class="absolute text-[#f2f2f2] text-[15px] py-[8px] px-[12px] bottom-[8px] w-[100%] text-center">Caption Two</div>
  </div>

  <div class="mySlides hidden animate-fade duration-[1.5s]">
    <img src="{{ asset('image/img_flower.jpg') }}" style="width:100%">
    <div class="absolute text-[#f2f2f2] text-[15px] py-[8px] px-[12px] bottom-[8px] w-[100%] text-center">Caption Three</div>
  </div>
  <div class="mySlides hidden animate-fade duration-[1.5s]">
    <img src="{{ asset('image/img_flower2.jpg') }}" style="width:100%">
    <div class="absolute text-[#f2f2f2] text-[15px] py-[8px] px-[12px] bottom-[8px] w-[100%] text-center">Caption four</div>
  </div>
  <!-- Next and previous buttons -->
  <a class="absolute top-[50%] w-auto mt-[22px] p-[16px] text-white font-bold text-[18px] transition-[0.6s] select-none cursor-pointer rounded-r-[3px] hover:bg-[#000000cc]" onclick="plusSlides(-1)">&#10094;</a>
  <a class="absolute top-[50%] w-auto mt-[22px] p-[16px] text-white font-bold text-[18px] transition-[0.6s] select-none cursor-pointer right-0 rounded-l-[3px] hover:bg-[#000000cc]" onclick="plusSlides(1)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
<script src="{{ asset('js/carousel.js') }}"></script>
@stop