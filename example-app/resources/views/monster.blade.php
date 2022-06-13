@extends('layouts.app')
@section('content')

<div class="bg-[#E5D4BA] dark:bg-[#1C1C1C] w-[75%] mt-[50px]">
    <h1>{{ $post->nameMonster }}</h1>
    <h3>{{ $post->descrMonster }}</h3>
</div>
@endsection