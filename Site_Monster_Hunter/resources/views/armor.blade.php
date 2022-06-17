<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center">
        <p class="text-center text-5xl mb-[50px] text-black dark:text-[#FFF6E5]">Détail {{ $armor->nameArmor }}</p>
        <img src="{{ asset('images/'.$armor->aspectArmor) }}" alt="{{ $armor->aspectArmor }}" class="mb-[50px]">
        <table class="w-[80%] text-center">
            <tr class="bg-[#52493C] border-2 border-black">
                <th>Partie</th>
                <th>Résistance</th>
                <th>Matériel</th>
                <th>Talent</th>
            </tr>
            @foreach ($armor->armorDetails as $detail)
            <tr class="bg-[#9E8D74] border-[1px] border-black">
                <td class="border-[1px] border-black">
                    @switch($detail->partArmor)
                        @case('Heaume')
                            <img src="{{ assert('image/heaume.png') }}" alt="heaume"></img>
                            @break

                        @case('Plastron')
                            <img src="{{ assert('image/plastron.png') }}" alt="plastron"></img>
                            @break

                        @case('Bras')
                            <img src="{{ assert('image/bras.png') }}" alt="bras"></img>
                            @break

                        @case('Taille')
                            <img src="{{ assert('image/taille.png') }}" alt="taille"></img>
                            @break

                        @case('Jambe')
                            <img src="{{ assert('image/jambe.png') }}" alt="jambe"></img>
                            @break
                        @default

                    @endswitch
                    {{ $detail->partArmor }}
                </td>
                <td class="grid grid-cols-2 place-items-center">
                    <div>
                    Défense: {{ $armor->defenseArmor }}
                    </div>
                    <div>
                    <p>Feu: {{ $armor->fireArmor }}</p> 
                    <p>Eau: {{ $armor->waterArmor }}</p> 
                    <p>Foudre: {{ $armor->thunderArmor }}</p> 
                    <p>Glace: {{ $armor->iceArmor }}</p> 
                    <p>Dragon: {{ $armor->dragonArmor }}</p> 
                    </div>
                </td>
                <td class="border-[1px] border-black">
                    <div>{{ $detail->materials1Armor }}</div>
                    <div>{{ $detail->materials2Armor }}</div>
                    <div>{{ $detail->materials3Armor }}</div>
                    <div>{{ $detail->materials4Armor }}</div>
                </td>
                <td class="border-[1px] border-black">
                    <div>{{ $detail->talent1Armor }}</div>
                    <div>{{ $detail->talent2Armor }}</div>
                    <div>{{ $detail->talent3Armor }}</div>
                    <div>{{ $detail->talent4Armor }}</div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>