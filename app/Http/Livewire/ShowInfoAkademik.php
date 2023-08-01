<?php

namespace App\Http\Livewire;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use App\Models\InfoAkademik;

class ShowInfoAkademik extends LivewireDatatable
{
    public $model = InfoAkademik::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->searchable(),
            Column::name('judul')->searchable(),
            Column::callback('dokumen', function ($value) {
                $url = asset('/storage/uploads/akademik/'.$value);
                return view('datatables::link', [
                    'href' => $url,
                    'slot' => ucfirst($value),
                    'target' => '_blank'
                ]);
            })->label('dokumen'),
            Column::callback(['id'],function($id){
                return view('admin.akademik.table-actions', ['id'=> $id]);
            })->unsortable(),
        ];
    }
}
