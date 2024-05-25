<?php

namespace App\View\Components\backend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $datas;
    public $columns;
    public $name;
    /**
     * Create a new component instance.
     */
    public function __construct($datas, $columns, $name)
    {
        $this->datas = $datas;
        $this->columns = $columns;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.backend.table');
    }
}
