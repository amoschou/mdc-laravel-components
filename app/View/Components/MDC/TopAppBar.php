<?php

namespace App\View\Components\MDC;

use Illuminate\View\Component;

class TopAppBar extends Component
{
    /**
     * Centers the title horizontally. Only meant to be used with 0 or 1 actionItems.
     *
     * @var boolean
     */
    public $centerTitle = false;

    /**
     * Makes the bar a little smaller for higher density applications.
     *
     * @var boolean
     */
    public $dense = false;

    /**
     * Makes the bar much taller, can be combined with dense.
     *
     * @var boolean
     */
    public $prominent = false;

    /**
     * Styles the bar as a fixed bar.
     *
     * @var boolean
     */
    public $fixed = false;

    /**
     * Element used to listen for scroll events. The Javascript types are: HTMLElement|Window.
     *
     * @var string
     */
    public $scrollTarget = 'window'; // Not used in this wrapper.

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($prominent = false, $dense = false, $fixed = false)
    {
        $this->prominent = $prominent;
        $this->dense = $dense;
        $this->fixed = $fixed;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mdc.top-app-bar');
    }
}
