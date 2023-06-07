<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        $data =['name'=>'Niraj','phone_number'=>'9812624293'];
        return view('livewire.contact-us',compact('data'));
    }
}
