<x-app-layout>
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
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[500px] duration-[0.5s]">
        <div class="max-w-[75%] relative m-auto mt-[50px]">
            <div class="mySlides hidden animate-fade duration-[1.5s]">
                <a href="{{ route('allMonsters') }}">
                    <img src="{{ asset('images/img1.png') }}" class="w-[100%]">
                    <div class="absolute text-[#f2f2f2] text-[15px] py-[8px] px-[12px] bottom-[8px] w-[100%] text-center">Monstre</div>
                </a>
            </div>

            <div class="mySlides hidden animate-fade duration-[1.5s]">
                <a href="{{ route('allArmors', ['level' => 'Novice']) }}">
                    <img src="{{ asset('images/img2.png') }}" class="w-[100%]">
                    <div class="absolute text-[#f2f2f2] text-[15px] py-[8px] px-[12px] bottom-[8px] w-[100%] text-center">Arme</div>
                </a>
            </div>

            <div class="mySlides hidden animate-fade duration-[1.5s]">
                <a href="{{ route('allArmors', ['level' => 'Novice']) }}">
                    <img src="{{ asset('images/img3.png') }}" class="w-[100%]">
                    <div class="absolute text-[#f2f2f2] text-[15px] py-[8px] px-[12px] bottom-[8px] w-[100%] text-center">Armure</div>
                </a>
            </div>

            <div class="mySlides hidden animate-fade duration-[1.5s]">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/img4.png') }}" class="w-[100%]">
                    <div class="absolute text-[#f2f2f2] text-[15px] py-[8px] px-[12px] bottom-[8px] w-[100%] text-center">Faune</div>
                </a>
            </div>

            <div class="mySlides hidden animate-fade duration-[1.5s]">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/img4.png') }}" class="w-[100%]">
                    <div class="absolute text-[#f2f2f2] text-[15px] py-[8px] px-[12px] bottom-[8px] w-[100%] text-center">Carte</div>
                </a>
            </div>
            <!-- Next and previous buttons -->
            <a class="absolute top-[50%] w-auto mt-[22px] p-[16px] text-white font-bold text-[18px] transition-[0.6s] select-none cursor-pointer rounded-r-[3px] hover:bg-[#000000cc]" onclick="plusSlides(-1)">&#10094;</a>
            <a class="absolute top-[50%] w-auto mt-[22px] p-[16px] text-white font-bold text-[18px] transition-[0.6s] select-none cursor-pointer right-0 rounded-l-[3px] hover:bg-[#000000cc]" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="text-center">
            <span class="dot w-[15px] h-[15px] m-x-[2px] border-2 bg-transparent inline-block border-[#717171] rounded-[50%] cursor-pointer transition-colors duration-[0.6s] hover:bg-[#717171]" onclick="currentSlide(0)"></span>
            <span class="dot w-[15px] h-[15px] m-x-[2px] border-2 bg-transparent inline-block border-[#717171] rounded-[50%] cursor-pointer transition-colors duration-[0.6s] hover:bg-[#717171]" onclick="currentSlide(1)"></span>
            <span class="dot w-[15px] h-[15px] m-x-[2px] border-2 bg-transparent inline-block border-[#717171] rounded-[50%] cursor-pointer transition-colors duration-[0.6s] hover:bg-[#717171]" onclick="currentSlide(2)"></span>
            <span class="dot w-[15px] h-[15px] m-x-[2px] border-2 bg-transparent inline-block border-[#717171] rounded-[50%] cursor-pointer transition-colors duration-[0.6s] hover:bg-[#717171]" onclick="currentSlide(3)"></span>
            <span class="dot w-[15px] h-[15px] m-x-[2px] border-2 bg-transparent inline-block border-[#717171] rounded-[50%] cursor-pointer transition-colors duration-[0.6s] hover:bg-[#717171]" onclick="currentSlide(4)"></span>
        </div>
    </div>
</x-app-layout>
<script src="{{ asset('js/carousel.js') }}"></script>
<script>timeOut()</script>