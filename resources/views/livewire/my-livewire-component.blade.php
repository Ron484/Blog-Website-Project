<div>
    @foreach ($this->posts as $post)
        <x-posts.post-content :post="$post"/>
    @endforeach

    <div class="p-10 my-3">
        {{$this->posts->onEachSide(1)->links()}}
    </div>

</div>
