<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavigationItem extends Component
{
    public $href;

    public function __construct($href)
    {
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.navigation-item');
    }
}
