<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center">
        <p class="text-center text-5xl mb-[50px] text-black dark:text-[#FFF6E5]">{{ $faun->nameFaun }}</p>
        <div class="border-2 border-black w-[80%] h-[500px] mb-[50px]">
            <span id="img1">{{ $faun->imageFaun }}</span>
        </div>
        <div id="part2" class="w-[100%] grid grid-cols-2 place-items-center border-2 border-black">
            <div class="w-full border-2 border-black">
                <p id="title" class="text-center text-2xl mb-[10px] text-black dark:text-[#FFF6E5]">Détail</p>
                <p id="text" class="text-xl text-black dark:text-[#FFF6E5]">{{ $faun->descrFaun }}</p>
            </div>
            <div id="part2img" class="w-full h-[500px] border-2 border-black">
                <span id="img2">{{ $faun->imageTwoFaun }}</span>
            </div>
        </div>
    </div>
</x-app-layout>