<?php

namespace App\Livewire;

use App\Models\Activity;
use Livewire\Component;

class CreateActivity extends Component
{
    public $title;
    public $description;
    public $type;
    public $types = Activity::TYPES;

    // Define validation rules
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'type' => 'required',
    ];


    protected $listeners = ['createActivity'];

    public function createActivity()
    {
        // Validate the input data
        dd($this->type,$this->description,$this->title);
        $this->validate();

        dd($this->types);
        // Activity::create([
        //     'title' => $this->title,
        //     'description' => $this->description,
        //     'type' => $this->type,
        // ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-activity');
    }
}
