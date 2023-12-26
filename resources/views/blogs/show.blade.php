<x-app-layout>
    <main class="py-12 bg-white-100 min-h-screen">

        <div class="container  mx-auto px-4 flex flex-wrap lg:flex-nowrap">

            <!-- Main content -->

            <div class="w-9/12 max-w-screen-xl mx-auto py-12 pl-12 ">

                <!-- big post -->
                <div class="rounded-sm overflow-hidden bg-gray-100 shadow-sm" style="width: 900px; margin-bottom: 14px;">
                    <a wire:navigate href="{{ route('blogs.show', $post->slug) }}"
                        class="block rounded-md overflow-hidden">
                        <img src="{{ $post->getImage() }}"
                            class="w-full h-96 object-cover transform hover:scale-110 transition duration-500">
                    </a>
                    <div class="p-4 pb-5">
                        <a wire:navigate href="{{ route('blogs.show', $post->slug) }}">


                            <h2
                                class="block text-2xl font-semibold text-gray-700 hover:text-pink-500 transition font-roboto">
                                {{ $post->title }}
                            </h2>

                        </a>

                        <div class="mt-3 flex space-x-4">
                            <div class="flex text-gray-400 text-sm items-center">
                                <span class="mr-2 text-xs">
                                    <i class="far fa-user"></i>
                                </span>
                                {{-- Blogging Tips --}}
                                {{ $post->author->name }}


                            </div>
                            <div class="flex text-gray-400 text-sm items-center">
                                <span class="mr-2 text-xs">
                                    <i class="far fa-clock"></i>
                                </span>
                                {{-- June 11, 2021 --}}
                                {{ $post->published_at->diffForHumans() }}

                            </div>
                        </div>
                        <div class="mt-3 flex space-x-4">

                            <p class="text-gray-500 text-sm mt-2 pl-1">
                                {!! $post->content !!}


                            </p>


                        </div>

                    </div>
                </div>



                <livewire:comments :post="$post" />


            </div>
        </div>



    </main>

</x-app-layout>
