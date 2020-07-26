<?php

namespace App\View\Components\MDC;

use Illuminate\View\Component;

class Drawer extends Component
{
    /**
     * Whether the dialog is open
     *
     * @var boolean
     */
    public $open = false;

    /**
     * When true, displays the title, subtitle, and header slots
     *
     * @var boolean
     */
     public $hasHeader = false;

    /**
     * When set to 'dismissible', overlays the drawer on the content. When set
     * to 'modal', also adds a scrim when the drawer is open. When set to empty
     * string, it is inlined with the page and displaces app content.
     *
     * @var string
     */
     public $type = '';

    /**
     * A unique ID.
     *
     * @var string
     */
    public $id = NULL;

    /**
     * Create a new component instance.
     *
     * @param  boolean  $open
     * @param  boolean  $hasHeader
     * @param  string  $type
     * @return void
     */
    public function __construct($type = '', $hasHeader = false, $id = NULL)
    {
        $this->type = $type;
        $this->hasHeader = $hasHeader;
        $this->id = $id ?? \Illuminate\Support\Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mdc.drawer');
    }
}
