<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalWrapper extends Component
{
    public $modalTitle;  // This property will hold the modal title
    public $modalSubTitle;  // This property will hold the modal subtitle
    public $content;  // This property will hold the dynamic content
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


    public function __construct(
        $modalTitle = 'Modal Title',
        $modalSubTitle = 'Modal Subtitle',
        $backButtonText = 'Back',
        $nextButtonText = 'Next',
        $closeButtonText = 'Close',
        $confirmButtonText = 'Confirm',
        $showBackButton = false,
        $showNextButton = false,
        $showCloseButton = true,
        $showConfirmButton = true,
        $showFooter = true,
        $showHeader = true,
        $maxWidth = "500px",
        $confirmAction = null
    ) {
        $this->modalTitle = $modalTitle;
        $this->modalSubTitle = $modalSubTitle;
        $this->backButtonText = $backButtonText;
        $this->nextButtonText = $nextButtonText;
        $this->closeButtonText = $closeButtonText;
        $this->confirmButtonText = $confirmButtonText;
        $this->showBackButton = $showBackButton;
        $this->showNextButton = $showNextButton;
        $this->showCloseButton = $showCloseButton;
        $this->showConfirmButton = $showConfirmButton;
        $this->showFooter = $showFooter;
        $this->showHeader = $showHeader;
        $this->maxWidth = $maxWidth;
        $this->confirmAction = $confirmAction;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-wrapper');
    }
}
