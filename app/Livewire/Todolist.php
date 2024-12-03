<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate; 
use App\Events\TodoAdded;

class Todolist extends Component
{
    public $title = 'Todo list';

    #[Validate('required|min:2')] 
    public $todo;

    public $todos = [];

    public function addTodo()
    {
        $this->validate();

        $this->todos[] = $this->todo;

        TodoAdded::dispatch($this->todos);
        
        $this->todo = '';

    }

    public function render()
    {
        return view('livewire.todolist');
    }

}
