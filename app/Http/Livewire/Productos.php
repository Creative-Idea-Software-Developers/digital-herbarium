<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Planta;

class Productos extends Component
{

    public $plantas;

    public function render()
    {
        $this->plantas = Planta::all();
        return view('livewire.productos');
    }
}
