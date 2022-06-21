<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s]">
        <p class="text-center text-6xl mb-[50px] text-black dark:text-[#FFF6E5]">Armes</p>
        <div class="grid grid-cols-2 place-items-center	mb-[35px]">
            @foreach ($weaponType as $weapons)
            <div class="text-center mb-[15px]">
                <a href="{{ route('weapon.showType', ['idType' => $weapons->id]) }}">
                    <p class="dark:text-[#FFF6E5]">{{ $weapons->TypeWeapon }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</x-app-layout>