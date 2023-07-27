<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Livewire\WithPagination;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ShowArtikel extends LivewireDatatable
{
    public $model = Artikel::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->searchable(),
            Column::name('title')->label('Judul')->searchable(),
            Column::name('category')->label('Kategori')->filterable(['pengumuman','berita', 'kemahasiswaan']),
            DateColumn::name('created_at')->label('Created At')->filterable(),
            DateColumn::name('published_at')->label('Published At')->filterable(),
            Column::callback(['id'],function($id){
                return view('admin.artikel.table-actions', ['id'=> $id]);
            })->unsortable(),
        ];
    }

    // public function updatingSearch()
    // {
    //     $this->resetPage();
    // }
    // public function render()
    // {
    //     // $artikels = Artikel::select('title', 'id', 'category','published_at')->whereLike(['title', 'category'],'%'.$this->search.'%')->paginate(20);
    //     // $artikels = Artikel::whereLike(['title', 'category'],'%'.$this->search.'%')->paginate(20);
    //     // dd($artikels);
    //     $data = [
    //         'artikels' => $artikels,
    //     ];
    //     return view('livewire.show-artikel',$data);
    // }
}
