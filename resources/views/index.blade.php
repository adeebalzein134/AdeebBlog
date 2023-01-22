@extends('layouts.app')

@section('content')


    <!-- HERO -->
    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">Welcome To My Blog</h1>
        <a href="/blog" class="bg-gray-100 text-gray-700 hover:bg-gray-700 hover:text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-xl transition duration-300">Start Reading!</a>
    </div>

     <!-- HOW TO BE A BACK-END DEVELOPER? -->
    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/238/960/600" alt="">
        </div>

        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h1 class="font-bold text-gray-700 text-4xl uppercase">How To Be A Back-End Developer?</h1>

            <p class="font-bold text-gray-600 text-xl pt-2">You Can Find The Answer Here!</p>

            <p class="py-4 text-gray-500 text-sm leading-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis non minima libero quos ipsum dolores vel dolor excepturi sed sapiente aut, obcaecati, officia in iste quae unde tempore, itaque suscipit.
            </p>

            <a href="/" class="bg-gray-700 text-gray-100 hover:bg-gray-500 transition duration-300 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
        </div>
    </div>

    <!-- Blog Categories -->
    <div class="text-center p-15 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">Blog Categories</h2>

        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-3xl py-2">UX Design Thinking</div>
            <div class="font-bold text-3xl py-2">Programming Languages</div>
            <div class="font-bold text-3xl py-2">Graphic Design</div>
            <div class="font-bold text-3xl py-2">Front-End Development</div>
        </div>
    </div>

    <!-- Recent Posts -->
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus aspernatur velit fugiat unde nemo enim dolorem voluptatem, beatae officia laudantium rerum iure in accusantium perferendis adipisci quisquam, neque qui sit sint assumenda. Necessitatibus velit dolore fuga magnam dolores corporis repellat expedita, inventore possimus optio. Id adipisci voluptatem ipsum ab exercitationem assumenda accusamus, iusto itaque mollitia officia neque pariatur est. Dolore voluptate numquam veniam optio qui inventore deleniti repudiandae esse doloribus nemo, est officia. Ex nam veniam earum blanditiis quam tenetur voluptas magni doloribus ratione dignissimos iusto eum, cumque est rem maxime saepe eligendi, nihil numquam fugiat explicabo facere molestias suscipit.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">

                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Programming</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Languages</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Back-End</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">PHP</a></li>
                </ul>

                <h3 class="text-l py-10 leading-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, in dolor similique architecto dolorem nemo corrupti qui ab? Consequatur eligendi minima culpa commodi voluptatum harum obcaecati delectus quasi. Inventore maxime reiciendis quisquam sint similique tempore a esse, illo delectus veniam praesentium saepe optio quae labore amet dolore. Quidem, dolor dolorem?
                </h3>

                <a href="/" class="transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block hover:bg-orange-900 transition duration-300">Read More</a>
            </div>
        </div>
        
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/242/960/600" alt="">
        </div>
    </div>



@endsection