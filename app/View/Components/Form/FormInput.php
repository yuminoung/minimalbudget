<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class FormInput extends Component
{

    public $name;
    public $label;
    public $autocomplete;
    public $value;

    public function __construct($name, $label, $value = null, $autocomplete = null)
    {
        $this->value = $value;
        $this->autocomplete = $autocomplete;
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.form-input');
    }
}
