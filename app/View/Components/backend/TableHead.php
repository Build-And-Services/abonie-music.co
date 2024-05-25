<?php

namespace App\View\Components\backend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableHead extends Component
{
    public $columns;
    /**
     * Create a new component instance.
     */
    public function __construct($columns)
    {
        $this->columns = $columns;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.backend.table-head');
    }
}
