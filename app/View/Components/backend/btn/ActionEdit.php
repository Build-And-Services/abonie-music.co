<?php

namespace App\View\Components\backend\btn;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionEdit extends Component
{
    public $name;
    public $id;
    public function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.backend.btn.action-edit');
    }
}
