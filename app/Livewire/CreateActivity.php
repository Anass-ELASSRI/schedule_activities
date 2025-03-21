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

    protected $listeners = ['create'];


    public function create()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'nullable',
            'type' => 'required',
        ]);
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
