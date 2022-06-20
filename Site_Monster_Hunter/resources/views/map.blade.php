<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center">
        <p class="text-center text-5xl mb-[50px] text-black dark:text-[#FFF6E5]">{{ $map->nameMap }}</p>
        <div class="w-[100%] grid grid-cols-4 place-items-center">
            <div id="map" class="categorie text-center text-3xl mb-[50px] text-black dark:text-[#FFF6E5] border-black dark:border-[#FFF6E5] cursor-pointer select-none border-b-2"><span onclick="selectCategorie('map', app)">Carte</span></div>
            <div id="maxi" class="categorie text-center text-3xl mb-[50px] text-black dark:text-[#FFF6E5] border-black dark:border-[#FFF6E5] cursor-pointer select-none"><span onclick="selectCategorie('maxi', app)">Maxiboosts</span></div>
            <div id="faun" class="categorie text-center text-3xl mb-[50px] text-black dark:text-[#FFF6E5] border-black dark:border-[#FFF6E5] cursor-pointer select-none"><span onclick="selectCategorie('faun', app)">Autre faune</span></div>
            <div id="collect" class="categorie text-center text-3xl mb-[50px] text-black dark:text-[#FFF6E5] border-black dark:border-[#FFF6E5] cursor-pointer select-none"><span onclick="selectCategorie('collect', app)">Collecte</span></div>
        </div>
        <div class="border-2 border-black w-[80%] h-[500px] mb-[50px]">
            <span id="img1">{{ $map->imageMap }}</span>
        </div>
    </div>
    <script>
        let app = <?= json_encode($map) ?>;
    </script>
    <script src="{{ asset('js/map.js') }}"></script>
</x-app-layout>