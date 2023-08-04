<?php

namespace App\Http\Livewire;

use App\Models\EventMahasiswa;
use Livewire\Component;
use Livewire\WithPagination;

class ShowEventPublic extends Component
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

        $event = EventMahasiswa::query()->whereLike(['judul', 'slug', 'tanggal'], '%'.$this->search.'%')->paginate(8);
        $data = [
            'event' => $event,
        ];
        return view('livewire.show-event-public', $data);
    }

}
