<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Personal;
use App\Models\Pai;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class PersonalTable extends DataTableComponent
{
    protected $model = Personal::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
<<<<<<< HEAD
        ->setPerPageAccepted([15, 25, 50, 100]);
=======
            ->setPerPageAccepted([15, 25, 50, 100]);
>>>>>>> 06922fc0224a1f4dd5fb1d040b387825a943b30e
    }

    public function columns(): array
    {
        return [
            Column::make("Doc identidad", "doc_identidad")
                ->sortable()
                ->searchable(),
            Column::make("Nombre", "nombre")
                ->sortable()
                ->searchable(),
            Column::make("Primer apellido", "primer_apellido")
                ->sortable()
                ->searchable(),
            Column::make("Segundo apellido", "segundo_apellido")
                ->sortable()
                ->searchable(),
            Column::make("Fecha nacimiento", "fecha_nacimiento")
                ->sortable(),
            Column::make("Sexo", "sexo")
                ->sortable(),
            Column::make("Domicilio", "domicilio")
                ->sortable(),
            Column::make("Pais orig", "pai.pais")
                ->sortable(),
            Column::make("Cargo", "cargo.cargo")
                ->sortable(),
            Column::make("Saldo anterior", "saldo_anterior")
                ->sortable(),
            Column::make("Estado", "estado")
                ->sortable(),
            Column::make(" ", "id")
                ->view('personal.actions'),
        ];
    }
}
