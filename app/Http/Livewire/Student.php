<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Student extends Component
{
    public $student =['niraj','sujan','nabin','punit'];
    public function render()
    {
        return view('livewire.student');
    }
}
