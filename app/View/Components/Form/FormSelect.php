<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class FormSelect extends Component
{
    public $values;
    public $name;
    public $label;

    public function __construct($values, $name, $label)
    {
        $this->label = $label;
        $this->values = $values;
        $this->name = $name;
    }

    public function render()
    {
        return view('components.form.form-select');
    }
}
