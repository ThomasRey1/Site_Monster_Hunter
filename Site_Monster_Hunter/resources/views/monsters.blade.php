<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s]">
        <p class="text-center text-6xl mb-[50px] text-black dark:text-[#FFF6E5]">Liste de monstres</p>
        
        <p class="text-center text-4xl mb-[10px] text-black dark:text-[#FFF6E5]">Petit Monstre</p>
        <!-- Small Monsters -->
        <div class="grid grid-cols-5 place-items-center	mb-[35px]">
            @foreach ($monsters as $monster)
            @if ($monster->greatMonster == 0)
            <div class="text-center mb-[15px]">
            <a href="{{ route('monster.show', ['id' => $monster->id]) }}">
                <div class="w-[75px] h-[75px] border-black border-2">{{ $monster->iconMonster }}</div>
                <p class="dark:text-[#FFF6E5]">{{ $monster->nameMonster }}</p>
            </a>
            </div>
            @endif
            @endforeach
        </div>
        <p class="text-center text-4xl mb-[10px] text-black dark:text-[#FFF6E5]">Grand Monstre</p>
        <!-- Great Monsters -->
        <div class="grid grid-cols-5 place-items-center">
            @foreach ($monsters as $monster)
            @if ($monster->greatMonster == 1)
            <div class="text-center mb-[15px]">
            <a href="{{ route('monster.show', ['id' => $monster->id]) }}">
                <div class="w-[75px] h-[75px] border-black border-2">{{ $monster->iconMonster }}</div>
                <p class="dark:text-[#FFF6E5]">{{ $monster->nameMonster }}</p>
            </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</x-app-layout>