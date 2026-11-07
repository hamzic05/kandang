<?php

namespace App\View\Components\Partials\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.partials.admin.header');
    }
}
