<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Counter extends Component
{
    public int $counter = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    #[On('echo:test,Test')]
    public function increment()
    {
        $this->counter++;
    }
}
