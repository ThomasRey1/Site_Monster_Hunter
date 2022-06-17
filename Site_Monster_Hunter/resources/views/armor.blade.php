<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center">
        <p class="text-center text-5xl mb-[50px] text-black dark:text-[#FFF6E5]">{{ $post->nameArmor }}</p>
        <div class="w-[100%] grid grid-cols-3 place-items-center">
            <div>{{ $post->defenseArmor }}</div>
            <div>{{ $post->fireArmor }}</div>
            <div>{{ $post->waterArmor }}</div>
            <div>{{ $post->thunderArmor }}</div>
            <div>{{ $post->iceArmor }}</div>
            <div>{{ $post->dragonArmor }}</div>
        </div>
        <div class="w-[100%] grid grid-cols-3 place-items-center">
            @foreach ($post->armorDetails as $detail)
            <div>{{ $detail->partArmor }}</div>
            <div>
                <div>{{ $detail->materials1Armor }}</div>
                <div>{{ $detail->materials2Armor }}</div>
                <div>{{ $detail->materials3Armor }}</div>
                <div>{{ $detail->materials4Armor }}</div>
            </div>
            <div>
                <div>{{ $detail->talent1Armor }}</div>
                <div>{{ $detail->talent2Armor }}</div>
                <div>{{ $detail->talent3Armor }}</div>
                <div>{{ $detail->talent4Armor }}</div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>