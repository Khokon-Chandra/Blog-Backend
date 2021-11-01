<?php

namespace App\View\Components\Backend;

use Illuminate\View\Component;

class CollapsCard extends Component
{
    public $collapsHeader;
    public $collapsId;
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public function __construct($header,$id)
    {
        $this->collapsHeader = $header;
        $this->collapsId = $id;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.backend.collaps-card');
    }
}
