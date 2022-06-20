<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s]">
        <p class="text-center text-6xl mb-[50px] text-black dark:text-[#FFF6E5]">Faune</p>
        <!-- Small Monsters -->
        <div class="grid grid-cols-5 place-items-center	mb-[35px]">
            @foreach ($fauns as $faun)
            <div class="text-center mb-[15px]">
                <a href="{{ route('faun.show', ['id' => $faun->id]) }}">
                    <div class="w-[75px] h-[75px] border-black border-2">{{ $faun->iconFaun }}</div>
                    <p class="dark:text-[#FFF6E5]">{{ $faun->nameFaun }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</x-app-layout>