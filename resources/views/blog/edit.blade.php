@if (Auth::user())
    
@extends('layouts.app')

@section('content')

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">Edit The Post</h1>
</div>

<div class="container m-auto text-center pt-15 pb-5">

    <form action="/blog/{{ $post['slug'] }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

        <input 
            type="text" value="{{ $post['title'] }}"
            name="title"
            placeholder="Title"
            class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5"
        >



        <textarea 
            name="description" 
            placeholder="Description"
            class="w-full h-20 text-l rounded-lg shadow-lg border-b p-15 mb-5"
        >{{ $post['description'] }}</textarea>


        <div class="py-15">
            <label
                class="
                    bg-gray-200 
                    hover:bg-gray-700 
                    text-gray-700 
                    hover:text-gray-200    
                    transition duration-300
                    cursor-pointer
                    p-5 rounded-lg
                    font-bold uppercase
            ">
                <span>Select An Image To Upload</span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>


        <button type="submit"  
                class="bg-green-700 hover:bg-green-200
                        text-gray-200 hover:text-gray-700
                        transition duration-300
                        cursor-pointer
                        p-5 rounded-lg
                        font-bold uppercase"
        >
        
        Save The Post</button>
    </form>

</div>

@endsection

@else
Sorry You Are not Signed
@endif

