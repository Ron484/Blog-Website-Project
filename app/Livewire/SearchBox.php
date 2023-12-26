<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component

{

    public $searchBox='';

    public function updatedSearchBox()
{
    $this->dispatch('search', ['search' => $this->searchBox]);
}


    public function render()
    {
        return view('livewire.search-box');
    }
}
