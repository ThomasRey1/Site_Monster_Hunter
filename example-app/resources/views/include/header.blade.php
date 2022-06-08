<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'colorTrans': '#117964'
                },
                content: {}
            }
        },
        darkMode: 'class'
    }
</script>
<script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>

<nav>
<div class="block absolute left-[20px] h-4 w-[300px] m-auto">
        <input class="block absolute h-[35px] w-[35px] top-[10px] z-[5] opacity-0 peer" type="checkbox">
        <div class="block h-[4px] w-[35px] absolute z-[2] top-[17px] rounded-[10px] bg-black origin-[0%_0%] duration-[0.4s] peer-checked:rotate-[35deg] dark:bg-gray-400"></div>
        <div class="block h-[4px] w-[35px] absolute z-[2] top-[26.5px] rounded-[10px] bg-black duration-[0.2s] peer-checked:scale-y-0 dark:bg-gray-400"></div>
        <div class="block h-[4px] w-[35px] absolute z-[2] top-[36px] rounded-[10px] bg-black origin-[0%_100%] duration-[0.4s] peer-checked:rotate-[-35deg] dark:bg-gray-400"></div>
        <ul class="pt-[100px] bg-white h-[100vh] w-[300px] right-[300px] translate-x-[-150%] ml-[0px] pl-[50px] duration-[0.5s] shadow-2xl peer-checked:translate-x-[-55px] dark:bg-gray-700">
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-gray-400 text-black font-medium duration-[0.3s] hover:text-colorTrans" href="../../../../../index.php?action=goHome">Accueil</a></li>
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-gray-400 text-black font-medium duration-[0.3s] hover:text-colorTrans">Ouvrages</a>
                <ul>
                    @if ($_SESSION["isConnected"] == true) 
                    <li class="mb-[1rem] text-[0.8rem]"><a class="dark:text-gray-400 text-black font-medium duration-[0.3s] hover:text-colorTrans" href="../../../../../index.php?action=addBook">Ajouter un ouvrage</a></li>
                    @endif
                    <li class="mb-[1rem] text-[0.8rem]"><a class="dark:text-gray-400 text-black font-medium duration-[0.3s] hover:text-colorTrans" href="../../../../../index.php?action=bookList">Tous les ouvrages</a></li>
                </ul>
            </li>
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-gray-400 text-black font-medium duration-[0.3s] hover:text-colorTrans" href="../../../../../index.php?action=contactUs">Nous contacter</a></li>
            <hr class="border-gray-400">
            <li class="mb-[1.5rem] text-[1.3rem]"><a class="dark:text-gray-400 text-black font-medium duration-[0.3s] hover:text-colorTrans">Compte</a>
                <ul>
                    @if ($_SESSION["isConnected"] == false) 
                    
                    <li class="mb-[1rem] text-[0.8rem]"><a class="dark:text-gray-400 text-black font-medium duration-[0.3s] hover:text-colorTrans" href="../../../../../index.php?action=logIn">Se connecter</a></li>
                    <li class="mb-[1rem] text-[0.8rem]"><a class="dark:text-gray-400 text-black font-medium duration-[0.3s] hover:text-colorTrans" href="{{ url('/insctiption') }}">S'inscrire</a></li>
                    @else
                    <li class="mb-[1rem] text-[0.8rem]"><a class="dark:text-gray-400 text-black font-medium duration-[0.3s] hover:text-colorTrans" href="../../../../../index.php?action=logOut">Se déconnecter</a></li>
                    <li class="mb-[1rem] text-[0.8rem]"><a class="dark:text-gray-400 text-black font-medium duration-[0.3s] hover:text-colorTrans" href="../../../../../index.php?action=userDetail&userId=<?=$_SESSION['user']['id']?>">Voir mon compte</a></li>
                    @endif
                </ul>
            </li>
        </ul>
    </div>
</nav>
<button id="theme-toggle" type="button" class=" left-[15%] top-[4px] text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>
</button>

<script src="{{ asset('js/darkMode.js') }}"></script>