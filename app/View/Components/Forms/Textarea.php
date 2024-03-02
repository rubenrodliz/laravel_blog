<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public string $name, $value, $rows, $cols, $placeholder, $class;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $value = '', $rows = 0, $cols = 0, $placeholder = '', $class = '')
    {
        $this->name = $name;
        $this->value = $value;
        $this->rows = $rows;
        $this->cols = $cols;
        $this->placeholder = $placeholder;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.forms.textarea');
    }
}
