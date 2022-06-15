@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-0 border-b-2 border-b-black bg-inherit placeholder-black dark:placeholder-[#FFF6E5] dark:text-[#FFF6E5] dark:border-[#FFF6E5] focus:border-black focus:ring focus:ring-indigo-200 focus:ring-opacity-0']) !!}>
