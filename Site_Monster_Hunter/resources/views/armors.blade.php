<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s]">
        <p class="text-center text-6xl mb-[50px] text-black dark:text-[#FFF6E5]">Liste d'armures</p>
        @foreach ($armors as $armor)
        <div><a href="{{ route('armor.show', ['id' => $armor->id]) }}">armure par id</a> {{ $armor->nameArmor }} {{ $armor->levelArmor }} {{ $armor->aspcetArmor }}</div>
        @endforeach
        <div>{{ $armors->links() }}</div>
    </div>
</x-app-layout>