<?php

namespace App\Livewire\Public;

use App\Models\Post;
use Livewire\Component;

class PostSection extends Component
{
    public $posts;
     
    public function mount(){
         $this->posts =Post::all();
    }
    public function render()
    {
        return view('livewire.public.post-section');
    }
}
