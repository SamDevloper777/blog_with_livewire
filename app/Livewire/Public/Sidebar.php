<?php

namespace App\Livewire\Public;

use App\Models\Topic;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        $data['topics'] = Topic::all();
        return view('livewire.public.sidebar',$data);
    }
}
