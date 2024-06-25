<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\URL;

class NavbarLink extends Component
{
    /**
     * Create a new component instance.
     */
    public $href;
    public $label;
    public $isActive;

    public function __construct($href = '/', $label = 'home')
    {
        $this->href = $href;
        $this->label = $label;
        $this->isActive = URL::current() == URL::to($href);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar-link');
    }
}
