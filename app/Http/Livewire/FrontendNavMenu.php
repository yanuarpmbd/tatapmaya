<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FrontendNavMenu extends Component
{
    public function render()
    {
        return view('livewire.frontend-nav-menu');
    }

    public function tutorial(){
        return redirect()->route('tutorial');
    }
}
