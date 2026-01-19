<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModelCard extends Component
{
    public function __construct(
        public $name,
        public $image,
        public $age,
        public $height,
        public $weight,
        public $bust,
        public $waist,
        public $hips,
        public $delay = '0.1s'
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.model-card');
    }
}