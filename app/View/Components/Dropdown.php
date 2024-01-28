<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Brawler ;
use App\models\Map;
use App\models\Mode;


class Dropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown', [
        'brawlers' => Brawler::orderBy('name')->get(),
        'modes' => Mode::orderBy('name')->get(),
        'maps' => Map::orderBy('name')->get()
        ]);
    }
}
