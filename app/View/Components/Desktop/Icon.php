<?php

namespace App\View\Components\Desktop;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icon extends Component
{
    public function __construct(
        public string $url = "#",
        public string $icon,
        public string $label,
        public ?string $title
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.desktop.icon');
    }
}
