<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LifeCycleHooks extends Component
{
    public $mobileNumber ="981263712";
    public $count;

    public function mount(){
        $this->mobileNumber ="9812624293";
    }

    // public function updated(){
    //     $this->count++;
    // }
    public function hydrate(){
        $this->count++;
    }
    public function updatePhone(){
        $this->mobileNumber="98736278";
    }
    public function render()
    {
        return view('livewire.life-cycle-hooks');
    }
}
