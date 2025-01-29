<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Livewire\Component;

class LocaleChangerComponent extends Component
{
    public function render()
    {
        return view('livewire.locale-changer-component');
    }

    public function changeTo($lang)
    {
        redirect()->route('welcome', ['lang' => $lang]);
    }
}
