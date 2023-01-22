@extends('layouts.app')

@section('content')

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">{{ $post['title'] }}</h1>
    <div class="mt-5">
        By: <span class="text-gray-500 italic">{{ $post['user']['name'] }}</span>
        On <span class="text-gray-500 italic">{{ date('d-m-Y' , strtotime($post['updated_at'])) }}</span>
    </div>
    {{ session() -> get('message') }}

</div>

<div class="container m-auto pt-15 pb-5">
    <div class="flex h-96">
        <img class="object-cover w-full" src="/images/{{ $post['img_path'] }}" alt="">
    </div>
    <div class="text-l text-gray-700 py-8 leading-6">
        {{ $post['description'] }}
    </div>

    @if(Auth::user() && Auth::user() -> id == $post['user_id'])
    <a href="/blog/{{ $post['slug'] }}/edit" class="bg-green-700 text-gray-100 py-4 px-5  mt-8 inline-block rounded-lg font-bold uppercase text-l place-self-start">Edit Post</a>

    <form action="/blog/{{ $post['slug'] }}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit" class="bg-red-700 text-gray-100 py-4 px-5  mt-8 inline-block rounded-lg font-bold uppercase text-l place-self-start">Delete Post</button>

    </form>
    @endif
</div>



@endsection