<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Home extends Component
{
    public function render(): View
    {
        return view('livewire.home');

    }
}
