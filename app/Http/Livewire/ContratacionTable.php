<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Contratacion;
use App\Models\Personal;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
class ContratacionTable extends DataTableComponent
{
    protected $model = Contratacion::class;

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
            Column::make("Nombre", "personal.nombre")
                ->sortable()
                ->searchable(),
            Column::make("Primer apellido", "personal.primer_apellido")
                ->sortable()
                ->searchable(),
            Column::make("Segundo apellido", "personal.segundo_apellido")
                ->sortable()
                ->searchable(),
            Column::make("Contrato", "contrato")
                ->view('contratacion.contrato'),
            Column::make("Referencia contrato", "referencia_contrato")
                ->sortable()
                ->searchable(),
            Column::make("Fecha ingreso", "fecha_ingreso")
                ->sortable(),
            Column::make("Sueldo inicial", "sueldo_inicial")
                ->sortable(),
            Column::make("Garantia", "garantia")
                ->sortable(),
            Column::make("Empresa", "empresa.razon_social")
                ->sortable(),
            Column::make(" ", "id")
                ->view('contratacion.actions'),
        ];
    }
}
