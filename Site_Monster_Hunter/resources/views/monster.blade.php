<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center">
        <p class="text-center text-5xl mb-[50px] text-black dark:text-[#FFF6E5]">{{ $post->nameMonster }}</p>
        <div class="w-[100%] grid grid-cols-3 place-items-center">
            <div class="text-center text-3xl mb-[50px] text-black dark:text-[#FFF6E5]">Description</div>
            <div class="text-center text-3xl mb-[50px] text-black dark:text-[#FFF6E5]">Faiblesse</div>
            <div class="text-center text-3xl mb-[50px] text-black dark:text-[#FFF6E5]">Matériaux</div>
        </div>
        <div id="img1" class="border-2 border-black w-[80%] h-[500px] mb-[50px]">
            <span>image 1</span>
        </div>
        <div class="w-[100%] grid grid-cols-2 place-items-center border-2 border-black">
            <div class="w-full border-2 border-black">
                <p class="text-center text-2xl mb-[10px] text-black dark:text-[#FFF6E5]">titre</p>
                <span class="text-xl">text</span>
            </div>
            <div class="w-full h-[500px] border-2 border-black">
            <span>image 2</span>
            </div>
        </div>
    </div>
</x-app-layout>