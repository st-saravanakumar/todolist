<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-700 text-center">To-Do List</h1>

        <form wire:submit.prevent="addTodo" class="flex flex-col space-y-4">
            <div>
                <input 
                    type="text" 
                    name="todo"
                    id="todo"
                    wire:model="todo" 
                    placeholder="Enter a new task" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-indigo-200 focus:outline-none text-gray-700"
                >
                @error('todo') 
                <span class="text-sm text-red-600 mt-1 block">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <button 
                type="submit" 
                class="w-full px-6 py-2 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-300">
                Add
            </button>
        </form>

        <ul class="mt-6 bg-gray-50 rounded-lg shadow-inner p-4 divide-y divide-gray-200">
            @forelse($todos as $v)
                <li class="py-2 px-4 text-gray-700">
                    {{ $v }}
                </li>
            @empty
                <li class="py-2 px-4 text-gray-500 text-center">
                    No tasks added yet.
                </li>
            @endforelse
        </ul>
    </div>
</div>
