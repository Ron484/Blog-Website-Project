<x-app-layout>

    @Section('hero')
        <div class="w-full  h-80 bg-cover bg-auto  relative"
            style="background-image: url('{{ asset('img/hero2.jpg') }}') ; background-color: transparent;">

            <div class="absolute inset-0 bg-black opacity-30"></div>
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <h1 class="text-2xl md:text-3xl lg:text-5xl font-bold text-center">
                    Welcome to <span class="text-pink-300"> Beauty</span> Blog
                </h1>
                <p class="text-lg mt-1">Best Blog in the universe</p>
            </div>
        </div>
    @endsection
    <div class="mt-28">

        <div class="mb-10">
            <div class="mb-16">
                <div class="w-full">
                    <div class="grid grid-cols-3 gap-10 w-full">
                        @foreach ($featuredPosts as $post)
                            <div class="md:col-span-1 col-span-3">

                                <x-posts.card :post="$post" />

                            </div>
                        @endforeach


                    </div>
                </div>
                <a class="mt-10 block text-center text-lg text-pink-500 font-semibold"
                    href="http://127.0.0.1:8000/blog">More Posts</a>
            </div>


        </div>
    </div>

</x-app-layout>
