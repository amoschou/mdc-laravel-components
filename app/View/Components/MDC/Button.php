<?php

namespace App\View\Components\MDC;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Icon to display, and aria-label value when label is not defined.
     *
     * @var string
     */
    public $icon = '';

    /**
     * Label to display for the button, and aria-label.
     *
     * @var string
     */
    public $label = '';

    /**
     * Creates a contained button that is elevated above the surface.
     *
     * @var boolean
     */
    public $raised = false;

    /**
     * Creates a contained button that is flush with the surface.
     *
     * @var boolean
     */
    public $unelevated = false;

    /**
     * Creates an outlined button that is flush with the surface.
     *
     * @var boolean
     */
    public $outlined = false;

    /**
     * Disabled buttons cannot be interacted with and have no visual
     * interaction effect.
     *
     * @var boolean
     */
    public $disabled = false;

    /**
     * When true, icon will be displayed after label.
     *
     * @var boolean
     */
    public $trailingIcon = false;

    /**
     * Material Design spec advises that touch targets should be at least
     * 48 x 48 px. To meet this requirement, set this to true.
     *
     * @var boolean
     */
    public $touch = false;

    /**
     * This is only necessary if you want to avoid potentially overlapping
     * touch targets on adjacent elements (due to collapsing margins).
     *
     * @var boolean
     */
    public $touchTargetWrapper = false;

    /**
     * A unique ID.
     *
     * @var string
     */
    public $id = NULL;

    /**
     * Create a new component instance.
     *
     * @param  string  $icon
     * @param  string  $label
     * @param  boolean  $raised
     * @param  boolean  $unelevated
     * @param  boolean  $outlined
     * @param  boolean  $disabled
     * @param  boolean  $trailingIcon
     * @param  boolean  $touch
     * @param  boolean  $touchTargetWrapper
     * @return void
     */
    public function __construct(
        $icon = '',
        $label = '',
        $raised = false,
        $unelevated = false,
        $outlined = false,
        $disabled = false,
        $trailingIcon = false,
        $touch = false,
        $touchTargetWrapper = false,
        $id = NULL
    ) {
        $this->icon = $icon;
        $this->label = $label;
        $this->raised = $raised;
        $this->unelevated = $unelevated;
        $this->outlined = $outlined;
        $this->disabled = $disabled;
        $this->trailingIcon = $trailingIcon;
        $this->touch = $touch;
        $this->touchTargetWrapper = $touchTargetWrapper;
        $this->id = $id ?? \Illuminate\Support\Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mdc.button');
    }
}

