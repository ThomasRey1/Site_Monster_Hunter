<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center dark:text-[#FFF6E5]">
        <p class="text-center text-5xl mb-[50px]">{{ $type->TypeWeapon }}</p>
        <div class="w-[80%] min-h-[200px] mb-[50px] text-center">
            <span>{{ $type->descrWeapon }}</span>
        </div>
        <div class="w-[100%] grid grid-cols-2 place-items-center">
            <div>
                @foreach ($weapons as $weapon)
                    @if ($weapon->weapon_type_id == $type->id)
                    <div class="text-center mb-[15px]">
                        <a href="{{ route('weapon.show', ['idType' => $type,'id' => $weapon->id]) }}">
                            <p>{{ $weapon->nameWeapon }}</p>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="w-full h-[500px]">
                <img src="{{ $type->imageWeapon }}" alt="{{ $type->imageWeapon }}">
            </div>
        </div>
    </div>
</x-app-layout>