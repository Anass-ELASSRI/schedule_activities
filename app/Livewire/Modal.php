<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;

class Modal extends Component
{
    public $isOpen = true;
    public $title;  // This property will hold the modal title
    public $subTitle;  // This property will hold the modal subtitle
    public $content;  // This property will hold the dynamic content
    public $backButtonText = 'Back';
    public $nextButtonText = 'Next';
    public $closeButtonText = 'Close';
    public $confirmButtonText = 'Confirm';
    public $showBackButton = false;
    public $showNextButton = false;
    public $showCloseButton = true;
    public $showConfirmButton = true;
    public $showFooter = true;
    public $showHeader = true;
    public $maxWidth = "[500px]";
    public $confirmAction;

    protected $listeners = ['showModal' => 'open'];

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function showNextButton()
    {
        $this->showNextButton = true;
    }
    public function hideNextButton()
    {
        $this->showNextButton = false;
    }
    public function showBackButton()
    {
        $this->showBackButton = true;
    }
    public function hideBackButton()
    {
        $this->showBackButton = false;
    }
    public function showCloseButton()
    {
        $this->showCloseButton = true;
    }
    public function hideCloseButton()
    {
        $this->showCloseButton = false;
    }
    public function showConfirmButton()
    {
        $this->showConfirmButton = true;
    }
    public function hideConfirmButton()
    {
        $this->showConfirmButton = false;
    }


    public function handleConfirmAction()
    {
        if ($this->confirmAction) {
            $this->emit($this->confirmAction);
        }
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
