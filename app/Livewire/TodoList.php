<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $todos;

    public function mount()
    {
        $this->todos = Todo::all();
    }

    public function render()
    {
        return view('livewire.todo-list', ['todos' => $this->todos]);
    }
}
