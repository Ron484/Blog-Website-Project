<div class="w-full mt-8 bg-gray-100 rounded-sm p-4 " style="width: 290px;">

    <h3 class="text-xl font-semibold text-gray-700 mb-3 font-roboto">Top Posts</h3>
    <div class="space-y-4">
        @foreach ($posts as $post)
            <a wire:navigate href="{{ route('blogs.show', $post->slug) }}" class="flex group">
                <div class="flex-shrink-0">
                    <img src="{{ $post->getImage() }}" class="h-14 w-20 rounded object-cover">
                </div>
                <div class="flex-grow pl-3">
                    <h5 class="text-md leading-5 block font-roboto font-semibold transition group-hover:text-blue-500">
                        {{ $post->title }}
                    </h5>
                    <div class="flex text-gray-400 text-sm items-center">
                        <span class="mr-1 text-xs"><i class="far fa-clock"></i></span>
                        {{ $post->published_at->format('F j, Y') }}

                    </div>

                </div>
            </a>
        @endforeach

    </div>
</div>
