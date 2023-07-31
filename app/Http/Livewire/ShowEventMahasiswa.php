<?php

namespace App\Http\Livewire;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use App\Models\EventMahasiswa;

class ShowEventMahasiswa extends LivewireDatatable
{
    public $model = EventMahasiswa::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->searchable(),
            Column::name('judul')->searchable(),
            DateColumn::name('tanggal')->searchable(),
            Column::callback('poster', function ($value) {
                $url = asset('/storage/uploads/kemahasiswaan/event/'.$value);
                return view('datatables::link', [
                    'href' => $url,
                    'slot' => ucfirst($value),
                    'target' => '_blank'
                ]);
            })->label('poster'),
            Column::callback(['id'],function($id){
                return view('admin.kemahasiswaan.event.table-actions', ['id'=> $id]);
            })->unsortable(),
        ];
    }
}
