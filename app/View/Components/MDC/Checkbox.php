<?php

namespace App\View\Components\MDC;

use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * Whether the checkbox is checked.
     *
     * @var boolean
     */
    public $checked = false;

    /**
     * When a checkbox is the parent of a set of child checkboxes, the
     * indeterminate state is used on the parent to indicate that some but not
     * all of its children are checked.
     *
     * @var boolean
     */
    public $indeterminate = false;

    /**
     * When true, the checkbox cannot be interacted with, and renders in muted colors.
     *
     * @var boolean
     */
    public $disabled = false;

    /**
     * The value that will be included if the checkbox is submitted in a form.
     *
     * @var string
     */
    public $value = '';

    /**
     * If not empty, this wraps the checkbox in a FormField and includes a label.
     *
     * @var string
     */
    public $label = '';

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
     * @param  boolean  $checked
     * @param  boolean  $indeterminate
     * @param  boolean  $disabled
     * @param  string  $value
     * @param  boolean  $touch
     * @param  boolean  $touchTargetWrapper
     * @param  string  $label
     * @param  string  $id
     * @return void
     */
    public function __construct(
        $checked = false,
        $indeterminate = false,
        $disabled = false,
        $value = '',
        $touch = false,
        $touchTargetWrapper = false,
        $label = '',
        $id = NULL
    ) {
        $this->checked = $checked;
        $this->indeterminate = $indeterminate;
        $this->disabled = $disabled;
        $this->value = $value;
        $this->touch = $touch;
        $this->touchTargetWrapper = $touchTargetWrapper;
        $this->label = $label;
        $this->id = $id ?? \Illuminate\Support\Str::uuid();
      }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mdc.checkbox');
    }
}

