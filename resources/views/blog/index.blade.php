@extends('layouts.app')

@section('content')


<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">All Posts</h1>
    {{ session() -> get('message') }}   

</div>

@if(count($posts) > 0)
@if(Auth::check())
<div  class="container sm:grid mx-auto py-15 px-5 border-b border-gray-300">
    <a href="/blog/create" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Create A New Post</a>
</div>
@endif

@foreach ($posts as $post)
    <div  class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
        <div class="flex">
            <img class="object-cover" src="/images/{{ $post['img_path'] }}" alt="">
        </div>

        <div>
            <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{ $post['title'] }}</h2>
            <div>
                By: <span class="text-gray-500 italic">{{ $post['user']['name'] }}</span> <br> <br>
                On <span class="text-gray-500 italic">{{ date('d-m-Y' , strtotime($post['updated_at'])) }}</span>
            </div>
            <p class="text-l text-gray-700 py-8 leading-8">
                {{$post['description']}}     
             </p>
            <a href="blog/{{ $post['slug'] }}" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start hover:bg-gray-500 transition duration-300">Read More</a>
        </div>
    </div>
@endforeach

@else
<div class="bg-orange-100 border-l-4 border-r-4 border-orange-500 text-orange-700 p-10 m-20 hover:bg-orange-700 hover:text-orange-100 transation duration-300" role="alert">
    <p class="font-bold text-center">There Are Not Any Posts To Show</p>
  </div>

  @if (Auth::user())
      
  <div  class="container sm:grid mx-auto py-15 px-5 border-b border-gray-100">
    <a href="/blog/create" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start hover:bg-gray-300 hover:text-green-700 transition duration-300">Create A New Post</a>
</div>
  @endif
@endif


@endsection