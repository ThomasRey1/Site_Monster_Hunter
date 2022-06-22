<script>
    tailwind.config = {
        theme: {
            extend: {
                transitionProperty: {

                },
                animation: {
                    'fade': 'fadeOut 1s ease-in-out'
                },
                keyframes: {
                    fadeOut: {
                        '0%': {
                            opacity: .4
                        },
                        '100%': {
                            opacity: 1
                        },
                    }
                }
            }
        },
        darkMode: 'class'
    }
</script>
<script>
    // On page load or when changing themes
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>

<nav x-data="{ open: false }" class="duration-[0.5s] dark:bg-[#1D2946] z-[12] text-[25.6px] w-full fixed bg-[#3F5A99] h-[50px] text-black align-middle text-center border-b-2 border-black">
    <!-- Primary Navigation Menu -->
    <div class="block absolute left-[20px] h-4 w-[300px] m-auto">
        <input class="block absolute h-[35px] w-[35px] top-[10px] z-[5] opacity-0 peer" type="checkbox">
        <div class="block h-[4px] w-[35px] absolute z-[2] top-[17px] rounded-[10px] bg-[#9E8D74] origin-[0%_0%] duration-[0.4s] peer-checked:rotate-[35deg] dark:bg-[#766343]"></div>
        <div class="block h-[4px] w-[35px] absolute z-[2] top-[26.5px] rounded-[10px] bg-[#9E8D74] duration-[0.4s] peer-checked:scale-y-0 dark:bg-[#766343]"></div>
        <div class="block h-[4px] w-[35px] absolute z-[2] top-[36px] rounded-[10px] bg-[#9E8D74] origin-[0%_100%] duration-[0.4s] peer-checked:rotate-[-35deg] dark:bg-[#766343]"></div>
        <ul class="pt-[100px] bg-[#3F5A99] h-[100vh] w-[300px] right-[300px] translate-x-[-150%] ml-[0px] pl-[50px] duration-[0.5s] shadow-2xl peer-checked:translate-x-[-55px] dark:bg-[#1D2946]">
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]" href="{{ url('/')}}">Accueil</a></li>
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]" href="{{ route('allMonsters') }}">Monstre</a></li>
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]" href="{{ route('allWeapons') }}">Arme</a></li>
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]" href="{{ route('allArmors', ['level' => 'Novice']) }}">Armures</a></li>
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]" href="{{ route('allFauns') }}">Faune</a></li>
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]" href="{{ route('allMaps') }}">Carte</a></li>
            <hr class="border-gray-400">
            @auth
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]">{{ Auth::user()->name }}</a>
                <ul>
                    <li class="mb-[1rem] text-[0.8rem]">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]" onclick="event.preventDefault(); this.closest('form').submit();">
                                Se déconnecter
                            </button>
                    </li>
                    </form>
                </ul>
            </li>
            @else
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]">Compte</a>
                <ul>
                    <li class="mb-[1rem] text-[0.8rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]" href="{{ route('login') }}">Se connecter</a></li>
                    <li class="mb-[1rem] text-[0.8rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]" href="{{ route('register') }}">S'inscrire</a></li>
                </ul>
            </li>
            @endauth
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-[#FFF6E5] text-black font-medium duration-[0.3s]" href="{{ route('contacte') }}">Contact</a></li>
        </ul>
    </div>
    <button id="theme-toggle" type="button" class="absolute left-[15%] top-[4px] text-[#9E8D74] dark:text-[#766343] hover:bg-[#354B80] dark:hover:bg-[#27375E] focus:outline-none focus:ring-4 focus:ring-[#354B80] dark:focus:ring-[#27375E] rounded-lg text-sm p-2.5">
        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>
    </button>
    <p class="mb-[1.5rem] text-[1.3rem] dark:text-[#FFF6E5] text-black font-medium duration-[0.3s] py-[10px]">Monster Hunter Rise</p>
    <!-- Settings Dropdown -->
    @if (Route::has('login'))
    <div class="hidden xl:flex xl:items-center xl:ml-6 top-0 right-0 px-6 absolute">
        @auth
        <div class="hidden sm:flex sm:items-center sm:ml-6 py-[10px]">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center mb-[1.5rem] text-[1.3rem] dark:text-[#FFF6E5] text-black font-medium duration-[0.3s] mr-[15px]">
                        <div >{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"  onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Déconnexion') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
        @else
        <a href="{{ route('login') }}" class="mb-[1.5rem] text-[1.3rem] dark:text-[#FFF6E5] text-black font-medium duration-[0.3s] mr-[15px] py-[10px]">Se connecter</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="mb-[1.5rem] text-[1.3rem] dark:text-[#FFF6E5] text-black font-medium duration-[0.3s] py-[10px]">S'inscrire</a>
        @endif
        @endauth
    </div>
    @endif
</nav>

<script src="{{ asset('js/darkMode.js') }}"></script>