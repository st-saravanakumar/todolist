import './bootstrap';
import Echo from 'laravel-echo';

window.Echo.channel('todos')
.listen('.TodoAdded', (event) => {
    console.log('Received Todos:', event.todos); // Log received todos to the console
});