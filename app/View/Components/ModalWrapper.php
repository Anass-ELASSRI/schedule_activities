<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalWrapper extends Component
{
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


    public function __construct(
        $title = 'Modal Title',
        $subTitle = 'Modal Subtitle',
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
        $this->title = $title;
        $this->subTitle = $subTitle;
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
