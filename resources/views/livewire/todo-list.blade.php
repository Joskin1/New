<div>
    <div x-data="todos">
        <form x-on:submit.prevent="create">
            <input x-model="newData" type="text" placeholder="write something">
            <h3>Create: <span x-text="newData"></span></h3>
            <button>Add</button>
        </form>

        <template x-for="todo in todos" :key="todo.id">
            <ul>
                <li x-text="todo.title"></li>
            </ul>
        </template>

    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('todos', () => ({
                todos: @json($todos),
                newData: '',
                create() {
                    this.todos.push({
                        title: this.newData
                    });
                    this.newData = '';
                },
            }));
        });
    </script>



</div>
