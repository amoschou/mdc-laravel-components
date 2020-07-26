<?php

namespace App\View\Components\MDC;

use Illuminate\View\Component;

class ListComponent extends Component
{
    /**
     * A unique ID.
     *
     * @var string
     */
    public $id = NULL;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = NULL)
    {
        $this->id = $id ?? \Illuminate\Support\Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mdc.list');
    }
}
