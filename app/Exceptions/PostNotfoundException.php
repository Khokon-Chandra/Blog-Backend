<?php

namespace App\Exceptions;

use App\Models\Menu;
use Exception;

class PostNotfoundException extends Exception
{
    public function render()
    {
        return view('errors.post_not_found',[
            'menus'=>Menu::first(),
        ]);
    }
}
