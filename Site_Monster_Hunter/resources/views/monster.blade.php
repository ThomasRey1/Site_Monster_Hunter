<x-app-layout>
    <div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px] duration-[0.5s] grid place-items-center text-black dark:text-[#FFF6E5]">
        <p class="text-center text-5xl mb-[50px]">{{ $monster->nameMonster }}</p>
        <div class="w-[100%] grid grid-cols-3 place-items-center">
            <div id="description" class="categorie text-center text-3xl mb-[50px] border-black dark:border-[#FFF6E5] cursor-pointer select-none border-b-2"><span onclick="selectCategorie('description', app)">Description</span></div>
            <div id="weakness" class="categorie text-center text-3xl mb-[50px] border-black dark:border-[#FFF6E5] cursor-pointer select-none"><span onclick="selectCategorie('weakness', app)">Faiblesse</span></div>
            <div id="materiel" class="categorie text-center text-3xl mb-[50px] border-black dark:border-[#FFF6E5] cursor-pointer select-none"><span onclick="selectCategorie('materiel', app)">Matériaux</span></div>
        </div>
        <div class="w-[80%] h-[500px] mb-[50px]">
            <img src="{{ $monster->imageMonster }}" alt="{{ $monster->imageMonster }}" id="img1">
        </div>
        <div id="part2" class="w-[100%] grid grid-cols-2 place-items-center">
            <div class="w-full">
                <p id="title" class="text-center text-2xl mb-[10px]">Détail</p>
                <p id="text" class="text-center text-xl">{{ $monster->descrMonster }}</p>
            </div>
            <div id="part2img" class="w-full h-[500px]">
                <img src="{{ $monster->imageTwoMonster }}" alt="{{ $monster->imageTwoMonster }}" id="img2">
            </div>
        </div>
    </div>
    <script>
        let app = <?= json_encode($monster) ?>;
    </script>
    <script src="{{ asset('js/monster.js') }}"></script>
</x-app-layout>