<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center min-h-screen">
        <p class="text-center text-6xl mb-[50px] text-black dark:text-[#FFF6E5]">Liste d'armures</p>
        <div class="grid grid-cols-2 w-[500px] place-items-center mb-[50px]">
            <a href="{{ route('allArmors', ['level' => 'Novice']) }}"><input type="submit" name="level" value="Novice" /></a>
            <a href="{{ route('allArmors', ['level' => 'Expert']) }}"><input type="submit" name="level" value="Expert" /></a>
        </div>
        <table class="w-[80%] text-center">
            <tr class="bg-[#52493C] border-2 border-black">
                <th>Partie</th>
                <th>Nom</th>
                <th>Niveau</th>
                <th>Aspect</th>
            </tr>
            @foreach ($armors as $armor)
                @if ($armor->levelArmor == $level)
                    <tr class="bg-[#9E8D74] border-[1px] border-black">
                        <td class="border-[1px] border-black">
                            <a href="{{ route('armor.show', ['id' => $armor->id]) }}" class="grid grid-cols-2">
                                @foreach ($armor->armorDetails as $detail)
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
                                <p>{{ $detail->partArmor }}</p>
                                @endforeach
                            </a>
                        </td>
                        <td class="border-[1px] border-black">{{ $armor->nameArmor }}</td>
                        <td class="border-[1px] border-black">{{ $armor->levelArmor }}</td>
                        <td class="grid place-items-center"><img src="{{ asset('images/'.$armor->aspectArmor) }}" alt="{{ $armor->aspectArmor }}"></td>
                    </tr>
                @endif
            @endforeach
        </table>
        <div class="mt-[10px]">{{ $armors->links() }}</div>
    </div>
    
    <script>
        let app = <?= json_encode($armor) ?>;
    </script>
    <script src="{{ asset('js/armor.js') }}"></script>
</x-app-layout>