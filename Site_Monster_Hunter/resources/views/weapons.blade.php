<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] text-black dark:text-[#FFF6E5]">
        <p class="text-center text-6xl mb-[50px]">Armes</p>
        <div class="grid grid-cols-2 place-items-center	mb-[50px]">
            @foreach ($weaponType as $weapons)
            <div class="text-center mb-[15px]">
                <a href="{{ route('weapon.showType', ['idType' => $weapons->id]) }}">
                    <p class="dark:text-[#FFF6E5]">{{ $weapons->TypeWeapon }}</p>
                </a>
            </div>
            @endforeach
        </div>
        
        <div class="w-[100%] grid grid-cols-2 place-items-center">
            <div class="w-full grid place-items-center">
                <p class="text-center text-2xl mb-[10px]">Filoptère</p>
                <p class="text-xl">Description Filoptère</p>
            </div>
            <div id="part2img" class="w-full h-[400px]">
                <img src="" alt="image filoptère" id="img2">
            </div>
        </div>
    </div>
    </div>
</x-app-layout>