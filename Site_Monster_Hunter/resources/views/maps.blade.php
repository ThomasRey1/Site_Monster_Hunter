<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s]">
        <p class="text-center text-6xl mb-[100px] text-black dark:text-[#FFF6E5]">Map</p>
        <div class="grid grid-cols-3 place-items-center	mb-[35px]">
            @foreach ($maps as $map)
            <div class="text-center mb-[100px] text-xl">
                <a href="{{ route('map.show', ['id' => $map->id]) }}">
                    <p class="dark:text-[#FFF6E5]">{{ $map->nameMap }}</p>
                    <div class="w-[175px] h-[75px] border-black border-2">{{ $map->imageMap }}</div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</x-app-layout>