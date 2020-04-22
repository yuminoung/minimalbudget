<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Headline extends Component
{
    public $breadcrumbs;

    public function __construct($breadcrumbs)
    {
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.headline');
    }
}
