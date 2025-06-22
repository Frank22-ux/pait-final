<?php

namespace App\Livewire\Alumnos;

use Livewire\Component;
use App\Models\Alumno;
use Illuminate\Validation\Rule;

class CreateAlumno extends Component
{
    public $primer_nombre;
    public $segundo_nombre;
    public $primer_apellido;
    public $segundo_apellido;
    public $correo_institucional;
    public $semestre;
    public $carrera;

    protected function rules()
    {
        return [
            'primer_nombre' => 'required|string|max:50',
            'segundo_nombre' => 'nullable|string|max:50',
            'primer_apellido' => 'required|string|max:50',
            'segundo_apellido' => 'nullable|string|max:50',
            'correo_institucional' => [
                'required',
                'email',
                Rule::unique('alumnos', 'correo_institucional')
            ],
            'semestre' => 'required|integer|between:1,12',
            'carrera' => 'required|string|max:100'
        ];
    }

    public function save()
    {
        $this->validate();

        Alumno::create([
            'primer_nombre' => $this->primer_nombre,
            'segundo_nombre' => $this->segundo_nombre,
            'primer_apellido' => $this->primer_apellido,
            'segundo_apellido' => $this->segundo_apellido,
            'correo_institucional' => $this->correo_institucional,
            'semestre' => $this->semestre,
            'carrera' => $this->carrera
        ]);

        $this->reset();
        session()->flash('success', 'Alumno registrado correctamente');
    }

public function render()
{
    return view('livewire.alumnos.create-alumno')
        ->layout('components.layouts.app'); // <--- Añadido
}
}