<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center text-black dark:text-[#FFF6E5]">
        <p class="text-center text-5xl mb-[50px]">{{ $faun->nameFaun }}</p>
        <div class="w-[80%] h-[500px] mb-[50px]">
            <img src="{{ $faun->imageFaun }}" alt="{{ $faun->imageFaun }}">
        </div>
        <div id="part2" class="w-[100%] grid grid-cols-2 place-items-center">
            <div class="w-full text-center">
                <p id="title" class="text-2xl mb-[10px]">Détail</p>
                <p id="text" class="text-xl">{{ $faun->descrFaun }}</p>
            </div>
            <div id="part2img" class="w-full h-[500px]">
                <img src="{{ $faun->imageTwoFaun }}" alt="{{ $faun->imageTwoFaun }}">
            </div>
        </div>
    </div>
</x-app-layout>