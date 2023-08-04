<?php

namespace App\Http\Livewire;

use App\Models\Prestasi;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPrestasiPublic extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search' => ['except' => '']];

    public function updatingSearch()
    {

        $this->resetPage();

    }

    public function render()
    {

        $prestasi = Prestasi::whereLike(['juara', 'deskripsi', 'nama_kompetisi', 'tingkatan', 'penyelenggara'], '%'.$this->search.'%')->paginate(10);

        $data = [
            'prestasi' => $prestasi
        ];
        return view('livewire.show-prestasi-public', $data);
    }

}
