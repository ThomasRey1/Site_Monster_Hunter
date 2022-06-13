@extends('layouts.app')
@section('content')

<div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px]">
    <h1>Liste de monstres</h1>
    @if ($posts->count() > 0)
    <!-- Small Monsters -->
    @foreach ($posts as $post)
    @if ($post->greatMonster == 0)
    <a href="{{ route('monster.show', ['id' => $post->id]) }}">
        <div>{{ $post->iconMonster }}</div>
        <a>{{ $post->nameMonster }}</a>
    </a>
    @endif
    @endforeach
    <hr class="border-black">
    <!-- Great Monsters -->
    @foreach ($posts as $post)
    @if ($post->greatMonster == 1)
    <a href="{{ route('monster.show', ['id' => $post->id]) }}">
        <div>{{ $post->iconMonster }}</div>
        <a>{{ $post->nameMonster }}</a>
    </a>
    @endif
    @endforeach
    @else
    <span>Aucun post dans la base de données</span>
    @endif
</div>
@endsection