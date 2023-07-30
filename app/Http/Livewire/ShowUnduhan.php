<?php

namespace App\Http\Livewire;

use App\Models\Unduhan;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Str;

class ShowUnduhan extends LivewireDatatable
{
    public $model = Unduhan::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->searchable(),
            Column::name('judul')->label('dokumen')->searchable(),
            Column::name('deskripsi'),
            Column::callback('path', function ($value) {
                if(Str::isUrl($value)){
                    $url = $value;
                }else {
                    $url = asset('/storage/uploads/unduhan/'.$value);
                    // $url = Storage::disk('public')->url('uploads/unduhan/'.$value);
                }
                return view('datatables::link', [
                    'href' => $url,
                    'slot' => ucfirst($value),
                    'target' => '_blank'
                ]);
            })->label('PATH')->searchable(),
            Column::callback(['id'],function($id){
                return view('admin.unduhan.table-actions', ['id'=> $id]);
            })->unsortable(),
        ];
    }
    // public function render()
    // {
    //     return view('livewire.show-unduhan');
    // }
}
