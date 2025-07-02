<?php

namespace App\View\Components\Desktop;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icon extends Component
{
    /**
     * @param string $asset image file in storage/icons
     * @param string $label label under the image
     * @param string $href  name of the route (not the url and do not use route('...'))
     */
    public function __construct(
        public string $asset,
        public string $label,
        public string $href = 'desktop'
    ) {
        $this->href = route($href);
        $this->asset = "storage/icons/{$asset}";
    }

    public function render(): View|Closure|string
    {
        return view('components.desktop.icon');
    }
}
