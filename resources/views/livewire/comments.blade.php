<!-- comment -->
<div class="p-4 bg-gray-50 rounded-sm shadow-sm mt-8" style="width: 900px;">
    <h4 class="text-xl text-gray-700 font-semibold mb-3 font-roboto">Post a comment</h4>
    <p class="text-sm text-gray-500 mb-4"> {{ $post->comments->count() }} comments</p>

    <div class="space-y-5">
        <!-- Existing comments -->
        @forelse($comments as $comment)
            <div class="flex items-start border-b pb-5 border-gray-200">
                <div class="w-12 h-12 flex-shrink-0">
                    <img src="{{ $comment->user->profile_photo_url }}" class="w-full">
                </div>
                <div class="flex-grow pl-4">
                    <h4 class="text-base font-roboto text-gray-800">{{ $comment->user->name }}</h4>
                    <p class="text-xs text-gray-400">{{ $comment->created_at->format('F j, Y') }}</p>
                    <p class="text-sm font-600 mt-2">{{ $comment->comment }}</p>
                </div>
            </div>
        @empty
            <div class="text-center text-gray-500">
                <span>No Comments Yet</span>
            </div>
        @endforelse
        <div>
            {{ $comments->links() }}
        </div>

    </div>

    <!-- New comment form -->

    <!-- New comment form -->
    <form wire:submit.prevent="newComment">
        <div class="mt-3 flex space-x-4">
            <h5 class="text-xl text-gray-700 mb-1">Comment:</h5>
        </div>
        @auth
            <textarea wire:model="comment"
                class="w-full border border-gray-200 py-3 px-5 text-sm rounded-sm h-20 focus:outline-none focus:border-gray-400"
                placeholder="Type your comment"></textarea>
            <div class="mt-2">
                <button type="submit"
                    class="text-blue-500 py-1 px-3 rounded-sm uppercase text-sm bg-blue-500 border border-blue-500 hover:text-pink-500 hover:bg-transparent transition">
                    Submit
                </button>
            </div>
        @else
            <a wire:navigate href="{{ route('login') }}" class="py-1 text-pink-300 underline hover:text-pink-600">Login
                First to comment</a>
        @endauth
    </form>


</div>
