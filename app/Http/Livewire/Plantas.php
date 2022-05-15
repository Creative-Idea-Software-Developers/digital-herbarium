<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Planta;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Plantas extends Component
{
    
    use WithFileUploads;

    public $plantas, $idPlanta, $name, $description, $image;
    public $modal = 0;

    public function render()
    {
        $this->plantas = Planta::all();
        return view('livewire.plantas');
    }

    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal(){
        $this->modal = true;
    }

    public function cerrarModal(){
        $this->modal = false;
        $this->limpiarCampos();
    }

    public function limpiarCampos(){
        $this->idPlanta = null;
        $this->description = "";
        $this->name = "";
        $this->image = "";
    }

    public function editar($id){
        $this->limpiarCampos();
        $planta = Planta::findOrFail($id);
        $this->idPlanta = $planta->id;
        $this->name = $planta->name;
        $this->description = $planta->description;
        $this->image = $planta->image;
        $this->abrirModal();
    }

    public function eliminar($id){
        $planta = Planta::find($id)->delete();
    }

    public function guardar(){
        $nameImage = date('YmdHis').".".$this->image->extension();
        $this->image->storeAs('photos/', $nameImage);
        Planta::updateOrCreate(['id'=>$this->idPlanta],
            [
                'name' => $this->name,
                'description' => $this->description,
                'image' => $nameImage,
                'user_id' => Auth::user()->id
            ]);
        $this->limpiarCampos();
        $this->cerrarModal();
    }
}
