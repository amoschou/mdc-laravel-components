<?php

namespace App\View\Components\Combo;

use Illuminate\View\Component;

class Frame extends Component
{
    /**
     * Type. Valid options are:
     *   '' or 'standard' (the empty string is synonomous with 'standard')
     *   'dismissible'
     *   'modal'
     *
     * @return string
     */
    public $type = 'dismissible';

    /**
     * SubType. Valid options are:
     *   'full-height-drawer'
     *   'below-top-app-bar'
     *
     * @return string
     */
    public $subType = 'below-top-app-bar';

    /**
     * Id.
     *
     * @return string
     */
    public $id = NULL;

    /**
     * Prominent.
     *
     * @return boolean
     */
    public $prominent = false;

    /**
     * Dense.
     *
     * @return boolean
     */
    public $dense = false;

    /**
     * Fixed.
     *
     * @return boolean
     */
    public $fixed = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $type = 'dismissible',
        $subType = 'full-height-drawer',
        $id = NULL,
        $prominent = false,
        $dense = false,
        $fixed = false
    ) {
        $this->type = $type;
        $this->subType = $subType;
        $this->id = $id ?? \Illuminate\Support\Str::uuid();
        $this->prominent = $prominent;
        $this->dense = $dense;
        if($type === 'dismissible' && $subType = 'below-top-app-bar') {
            $this->fixed = true;
        } else {
            $this->fixed = $fixed;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.combo.frame');
    }
}
