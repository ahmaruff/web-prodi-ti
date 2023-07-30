<?php

namespace App\Http\Livewire;

use App\Models\Dosen;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ShowDosen extends LivewireDatatable
{
    public $model = Dosen::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->searchable(),
            Column::name('nama')->searchable(),
            Column::name('nidn')->searchable(),
            Column::name('email')->searchable(),
            Column::name('jabatan_struktural')->label('Jabatan Struktural'),
            Column::name('jabatan_akademik')->label('Jabatan Akademik'),
            Column::name('homebase'),
            Column::callback(['id'],function($id){
                return view('admin.dosen.table-actions', ['id'=> $id]);
            })->unsortable(),
        ];
    }
    // public function render()
    // {
    //     return view('livewire.show-dosen');
    // }
}
