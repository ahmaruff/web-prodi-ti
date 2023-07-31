<?php

namespace App\Http\Livewire;

use App\Models\Prestasi;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ShowPrestasi extends LivewireDatatable
{
    public $model = Prestasi::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->searchable(),
            Column::name('juara')->searchable(),
            DateColumn::name('tanggal'),
            Column::name('deskripsi')->searchable(),
            Column::name('nama_kompetisi')->label('kompetisi')->searchable(),
            Column::name('tingkatan')->filterable(['kampus', 'kabupaten', 'provinsi', 'nasional', 'internasional']),
            Column::name('penyelenggara')->searchable(),
            Column::callback(['id'],function($id){
                return view('admin.kemahasiswaan.prestasi.table-actions', ['id'=> $id]);
            })->unsortable(),
        ];
    }
}
