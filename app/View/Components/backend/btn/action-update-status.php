<?php

namespace App\View\Components\backend\btn;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionUpdateStatus extends Component
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
        return view('components.backend.btn.action-update-status');
    }
}
