<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center dark:text-[#FFF6E5]">
        <p class="text-center text-5xl mb-[50px]">{{ $type->TypeWeapon }}</p>
        <div class="border-2 border-black w-[80%] h-[500px] mb-[50px]">
            <span id="img1">{{ $type->descrWeapon }}</span>
        </div>
        <div id="part2" class="w-[100%] grid grid-cols-2 place-items-center border-2 border-black">
            <div>
                @foreach ($weapons as $weapon)
                @if ($weapon->weapon_type_id == $type->id)
                <div class="text-center mb-[15px]">
                    <a href="{{ route('weapon.show', ['idType' => $type,'id' => $weapon->id]) }}">
                        <p class="dark:text-[#FFF6E5]">{{ $weapon->nameWeapon }}</p>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
            <div class="w-full h-[500px] border-2 border-black">
                <span>{{ $type->imageWeapon }}</span>
            </div>
        </div>
    </div>
</x-app-layout>