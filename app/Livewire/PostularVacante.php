<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Vacante;
use App\Notifications\NuevoCandidato;

class PostularVacante extends Component
{

    use WithFileUploads;
    
    public $cv;
    public $vacante;

    protected $rules = [
        'cv' => 'required|mimes:pdf|max:1024', // 1MB Max
    ];

    public function mount(Vacante $vacante)
    {
        $this->vacante = $vacante;
    }

    public function postularme()
    {
        $this->validate();

        // Almacenar el CV
        $cv = $this->cv->store('cv', 'public');

        // Crear el candidato a la vacante
        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $cv
        ]);

        // Crear notificacion y enviar el email
        $this->vacante->reclutador->notify(new NuevoCandidato($this->vacante->id, $this->vacante->titulo, auth()->user()->id));

        //Mostrar el usuario un mensaje de exito
        session()->flash('mensaje', 'Se envio correctamente tu informacion, ¡mucha suerte, ' . auth()->user()->name . '!');

        return redirect()->back();

    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
