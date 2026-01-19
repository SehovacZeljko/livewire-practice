<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutSection extends Component
{
    public $subtitle;
    public $title;
    public $bgClass;
    public $image;

    public function __construct(
        $subtitle = 'History', 
        $title = 'About Our Agency', 
        $bgClass = 'bg-secondary',
        $image = 'img/about.png'
    ) {
        $this->subtitle = $subtitle;
        $this->title = $title;
        $this->bgClass = $bgClass;
        $this->image = $image;
    }

    public function render(): View|Closure|string
    {
        return view('components.about-section');
    }
}
