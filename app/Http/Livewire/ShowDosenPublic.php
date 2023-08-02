<?php

namespace App\Http\Livewire;

use App\Models\Dosen;
use Livewire\Component;
use Livewire\WithPagination;

class ShowDosenPublic extends Component
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
        // $dosen = Dosen::paginate(10);
        $dosen = Dosen::query()->whereLike(['nama', 'nidn', 'email', 'jabatan_struktural'], '%'.$this->search.'%')->paginate(8);
        // $this->emit('dosenStore');
        $data = [
            'dosen' => $dosen
        ];
        return view('livewire.show-dosen-public', $data);
    }
}
