<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 bg-[#9E8D74] border-2 border-[#52493C] rounded-full w-full font-semibold text text-black tracking-widest hover:bg-[#52493C] active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 dark:bg-[#80725E] dark:hover:bg-[#52493C] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
