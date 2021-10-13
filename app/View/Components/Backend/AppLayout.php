<?php

namespace App\View\Components\Backend;

use Illuminate\View\Component;
use Spatie\Menu\Laravel\Facades\Menu;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public $menu;

    public function __construct()
    {
        $this->menu = Menu::new();
    }


    public function render()
    {
        return view('backend.layouts.app');
    }
}
