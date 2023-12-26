<div style="width: 290px; height:280px;" class=" bg-gray-100 rounded-sm p-4">
    <h3 class="text-xl  font-semibold text-gray-700 mb-3 font-roboto">Categories</h3>
    <div class="space-y-2">
        @foreach ($categories as $category)
            <a href="{{ route('blogs.blog', ['category' => $category->slug]) }}"
                class="flex leading-4 items-center font-semibold text-sm uppercase transition hover:text-pink-500">
                <span>{{ $category->name }}</span>
                <p class="ml-auto font-normal">({{ $category->posts()->count() }})</p>
            </a>
        @endforeach

        @if ($category)
            <a href="{{ route('blogs.blog') }}" wire:click.prevent="resetFilter"
                class="flex leading-4 items-center   font-semibold text-gray-700 mb-3 font-roboto hover:text-pink-500">
                Show All Posts
            </a>
        @endif

    </div>
</div>
