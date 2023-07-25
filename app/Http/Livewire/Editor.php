<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Editor extends Component
{
    public $content_html;

    public function mount() {
        $this->content_html = "<p>Halo, Ayo menulis!</p>";
    }

    public function render()
    {
        return view('livewire.editor');
    }
}
