<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center">
        <p class="text-center text-5xl mb-[50px] text-black dark:text-[#FFF6E5]">Détail {{ $type->TypeWeapon }}</p>
        <img src="{{ asset('images/'.$weapon->imageWeapon) }}" alt="{{ $weapon->imageWeapon }}" class="mb-[100px] min-h-[200px]">
        <table class="w-[80%] text-center mb-[168px]">
            <tr class="bg-[#52493C] border-2 border-black">
                <th>Nom</th>
                <th>État d'attaque</th>
                <th>Matériel</th>
                <th>Fabrication</th>
            </tr>
            <tr class="bg-[#9E8D74] border-[1px] border-black">
                <td class="border-[1px] border-black w-[20%]">
                    {{ $weapon->nameWeapon }}
                </td>
                <td class="text-left w-[30%]">
                    <p>Attaque: {{ $weapon->attackWeapon }}</p>
                    <p class="flex">Tranchant: <img src="{{ $weapon->imageTranchWeapon }}" alt="{{ $weapon->imageTranchWeapon }}"></p> 
                    <p class="flex">Élément: <img src="{{ $weapon->imageElementWeapon }}" alt="img élément"> {{ $weapon->elementWeapon }}</p> 
                    <p>Affinité: {{ $weapon->affiniteWeapon }}%</p> 
                    <p>Bonus de défense: {{ $weapon->defenseWeapon }}</p> 
                </td>
                <td class="border-[1px] border-black w-[25%]">
                    <div>{{ $weapon->materials1Weapon }}</div>
                    <div>{{ $weapon->materials2Weapon }}</div>
                    <div>{{ $weapon->materials3Weapon }}</div>
                    <div>{{ $weapon->materials4Weapon }}</div>
                </td>
                <td class="border-[1px] border-black w-[25%]">
                    @if ($weapon->fabrication1Weapon == '-')
                        -
                    @else
                        <div>{{ $weapon->fabrication1Weapon }}</div>
                        <div>{{ $weapon->fabrication2Weapon }}</div>
                        <div>{{ $weapon->fabrication3Weapon }}</div>
                        <div>{{ $weapon->fabrication4Weapon }}</div>
                    @endif
                </td>
            </tr>
        </table>
    </div>
</x-app-layout>