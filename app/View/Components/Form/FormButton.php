<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class FormButton extends Component
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.form-button');
    }
}
