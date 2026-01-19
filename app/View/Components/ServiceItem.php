<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceItem extends Component
{
    public $title;
    public $image;
    public $align; // 'left' or 'right'

    public function __construct($title, $image, $align = 'left')
    {
        $this->title = $title;
        $this->image = $image;
        $this->align = $align;
    }

    public function render(): View|Closure|string
    {
        return view('components.service-item');
    }
}
