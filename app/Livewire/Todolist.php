<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate; 
use App\Events\TodoAdded;

class Todolist extends Component
{
    public $title = 'Todo list';

    public $todo;

    public $todos = [];

    public function addTodo()
    {
        $this->validate([
            'todo' => 'required|min:2',
        ]);

        $this->todos[] = $this->todo;

        TodoAdded::dispatch($this->todos);

        $this->todo = '';

    }

    public function render()
    {
        return view('livewire.todolist');
    }

}
