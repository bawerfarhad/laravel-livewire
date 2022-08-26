<?php

namespace App\Http\Components;

use Livewire\Component;

class Index extends Component
{

    public $number;

    

    public function render()
    {
        return view('components.index')->extends('layouts.app');
    }
}
    