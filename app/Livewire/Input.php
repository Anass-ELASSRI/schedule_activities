<?php

namespace App\Livewire;

use Livewire\Component;

class Input extends Component
{
    public $inputValue;
    public $inputType = '';
    public $inputName = '';
    public $inputLabel = '';
    public $inputOptions = [];
    public $selectOptions = [];


    public function render()
    {
        return view('livewire.input');
    }
}
