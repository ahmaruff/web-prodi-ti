<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use Livewire\WithPagination;

class ShowArtikel extends Component
{
    use WithPagination;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $artikels = Artikel::whereLike(['title', 'category'],'%'.$this->search.'%')->paginate(20);
        $data = [
            'artikels' => $artikels,
        ];
        return view('livewire.show-artikel',$data);
    }
}
