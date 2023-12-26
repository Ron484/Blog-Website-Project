<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Comments extends Component

{


    public Post $post;
    public string $comment = '';

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function newComment()
    {
        if (auth()->guest()) {
            return;
        }

        $this->validate([
            'comment' => ['required', 'min:3', 'max:200'],
        ]);

        $this->post->comments()->create([
            'comment' => $this->comment,
            'user_id' => auth()->id(),
        ]);

        $this->reset('comment');
    }

    public function comments()
    {
        return optional($this->post)->comments()->with('user')->latest()->paginate(5);
    }


    

    public function render()
    {
        return view('livewire.comments', [
            'comments' => $this->comments(),
        ]);
    }    
    }

