<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        return view('livewire.faq',
            ['faqs' => \App\Models\Faq::all()])
            ->extends('layouts.frontend');
    }
}
