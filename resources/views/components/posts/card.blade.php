<div>
    @props(['post'])
    <div class="">
        <a wire:navigate href="{{ route('blogs.show', $post->slug) }}">
            <div>
                <img class="w-full rounded-xl" src="{{ $post->getImage() }}">
            </div>
        </a>
        <div class="mt-3">

            <a wire:navigate href="{{ route('blogs.show', $post->slug) }}"
                class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
        </div>

    </div>

</div>
