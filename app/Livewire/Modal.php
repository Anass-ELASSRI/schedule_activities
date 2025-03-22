<?php

namespace App\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $isOpen = true;
    public $modalTitle;
    public $modalSubTitle;
    public $content;
    public $backButtonText;
    public $nextButtonText;
    public $closeButtonText;
    public $confirmButtonText;
    public $showBackButton;
    public $showNextButton;
    public $showCloseButton;
    public $showConfirmButton;
    public $showFooter;
    public $showHeader;
    public $maxWidth;
    public $confirmAction;


    public function showModal()
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
        if ($this->confirmAction)
            $this->dispatch($this->confirmAction);
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
