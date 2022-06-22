<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] text-black dark:text-[#FFF6E5]">
        <p class="text-center text-6xl mb-[203px]">Map</p>
        <div class="grid grid-cols-3 place-items-center	mb-[50px]">
            @foreach ($maps as $map)
            <div class="text-center mb-[100px] text-xl">
                <a href="{{ route('map.show', ['id' => $map->id]) }}">
                    <p>{{ $map->nameMap }}</p>
                    <img src="{{ $map->imageMap }}" alt="{{ $map->imageMap }}" class="w-[175px] h-[75px]">
                </a>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</x-app-layout>