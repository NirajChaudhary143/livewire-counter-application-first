<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ActionLivewire extends Component
{
    public $actionMessage ="action on change";
    public $keyPressed ="Key Press to change";
    public $submitMessage ="Submit to change";

    public function clickChange(){
        $this->actionMessage ="Button is clicked!";
    }
    public function keyPress(){
        $this->keyPressed ="Enter Key is pressed.";
    }
    public function Submit(){
        $this->submitMessage="Form Submited";
    }
    public function render()
    {
        return view('livewire.action-livewire');
    }
}
