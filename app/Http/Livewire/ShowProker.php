<?php

namespace App\Http\Livewire;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use App\Models\ProgramKerja;

class ShowProker extends LivewireDatatable
{
    public $model = ProgramKerja::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->searchable(),
            Column::name('judul')->searchable(),
            Column::name('deskripsi')->searchable(),
            Column::callback(['id'],function($id){
                return view('admin.kemahasiswaan.himti.table-actions', ['id'=> $id]);
            })->unsortable(),
        ];
    }
}
