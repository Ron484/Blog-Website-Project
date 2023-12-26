<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination; 

use App\Models\Post;
use App\Models\Category;


class MyLivewireComponent extends Component

{
    use WithPagination;

    public $category='';
    

    public $searchBox='';

    public function updatedSearchBox($searchBox){
        $this->searchBox = $searchBox;

    }


    protected $queryString = ['category', 'searchBox'];

    
    public function getPostsProperty()
    {
        $query = Post::latestPublished();

        if ($this->category) {
            $query->whereHas('category', function ($query) {
                $query->where('slug', $this->category);
            });
        }

        return $query->where('title', 'like', "%{$this->searchBox}%")->paginate(3);
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.my-livewire-component', compact('categories'));
    }

    public function resetFilter()
    {
        $this->category = null;
        $this->searchBox = null; 
    }



}
