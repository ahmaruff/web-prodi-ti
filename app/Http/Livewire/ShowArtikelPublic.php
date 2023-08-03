<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use Livewire\WithPagination;

class ShowArtikelPublic extends Component
{
    use WithPagination;
    public $search;
    public $category;
    protected $queryString = ['search' => ['except' => '']];

    public function updatingSearch()
    {

        $this->resetPage();

    }
    public function render()
    {
        $artikel = Artikel::query()->where('is_published', true)->when($this->category, function($query, $category) {
            return $query->where('category', $category);
        })->whereLike(['title', 'author', 'category', 'published_at'],'%'.$this->search.'%')->paginate(10);
        $data = [
            'artikel'=> $artikel
        ];
        return view('livewire.show-artikel-public', $data);
    }
}
