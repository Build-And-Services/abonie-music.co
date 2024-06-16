<?php

namespace App\View\Components\backend\modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddLinkPresave extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.backend.modal.add-link-presave');
    }
}
