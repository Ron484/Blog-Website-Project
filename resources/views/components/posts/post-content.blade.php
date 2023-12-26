@props(['post'])
<!-- big post -->
<div class="rounded-sm overflow-hidden bg-gray-100 shadow-sm" style="width: 750px; margin-bottom: 14px;">
    <a wire:navigate href="{{ route('blogs.show', $post->slug) }}" class="block rounded-md overflow-hidden">
        <img src="{{ $post->getImage() }}"
            class="w-full h-96 object-cover transform hover:scale-110 transition duration-500">
    </a>
    <div class="p-4 pb-5">
        <a wire:navigate href="{{ route('blogs.show', $post->slug) }}">

            <h2 class="block text-2xl font-semibold text-gray-700 hover:text-pink-500 transition font-roboto">
                {{ $post->title }}
            </h2>

        </a>

        <p class="text-gray-500 text-sm mt-2">
            {{ substr($post->content, 0, 100) }} {{-- Display the first 100 characters --}}


        </p>

        {{-- hidden content  --}}
        <div id="hiddenContent_{{ $post->id }}" style="display: none;">



            <p id="contentPart2_{{ $post->id }}" class="text-gray-500 text-sm mt-2">
                {{ substr($post->content, 100) }} {{-- Display the rest of the content --}}
            </p>



        </div>

        {{-- end hidden Content --}}
        <div class="mt-3 flex space-x-4">
            <div class="flex text-gray-400 text-sm items-center">
                <span class="mr-2 text-xs">
                    <i class="far fa-user"></i>
                </span>
                {{ $post->author->name }}


            </div>
            <div class="flex text-gray-400 text-sm items-center">
                <span class="mr-2 text-xs">
                    <i class="far fa-clock"></i>
                </span>
                {{ $post->published_at->diffForHumans() }}

            </div>
        </div>
        <div class="mt-3 flex space-x-4">

            <a href="#" onclick="displayContent({{ $post->id }});" id="readMoreBtn_{{ $post->id }}"
                class="text-white py-1 px-3 rounded-sm uppercase text-sm bg-blue-500 border border-blue-500 hover:text-blue-500 hover:bg-transparent transition">
                Read more
            </a>
        </div>

    </div>
</div>
