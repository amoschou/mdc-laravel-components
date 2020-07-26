<?php

namespace App\View\Components\MDC;

use Illuminate\View\Component;

class TopAppBar__ActionItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mdc.top-app-bar__action-item');
    }
}
