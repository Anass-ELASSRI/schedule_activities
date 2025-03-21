<?php

namespace App\Livewire;

use Livewire\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $label;
    public $options;
    public $selectOptions;


    public function render()
    {
        return view('livewire.input');
    }
}
