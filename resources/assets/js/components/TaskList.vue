<template>
    <div class='row vue-wrapper'>
        <h1>My Tasks: An Example of Vue.js</h1>
        <h4>New Task</h4>
        <p class="bold-text">Enter in a new task and click to add the task</p>
        <form action="#" @submit.prevent="createTask()">
            <div class="input-group">
                <input v-model="task.body" type="text" name="body" class="form-control" autofocus>
                <span class="input-group-btn">
                    <button @click="createTask(task.id)" type="submit" class="new-task-btn">Add Task</button>
                    <p class="bold-text">You are entering: <span class="red-text">{{ task.body }}</span></p>
                </span>
            </div>
        </form>
        <h4>All Tasks</h4>
<!--         <table class="list-group modified">
            <tr><td v-if='list.length === 0'>You have no to-do items in your list!</td></tr>
            <tr><td class="list-group-item bold-text" v-for="(task, index) in list">{{ task.body }}</td><td><button @click="deleteTask(task.id)" class="btn btn-danger btn-xs pull-right vue-btn">Delete</button></td></tr>
        </table> -->
        <ul class="list-group modified">
            <li v-if='list.length === 0'>There are no tasks yet!</li>
            <li class="list-group-item" v-for="(task, index) in list">
                <button @click="deleteTask(task.id)" class="btn btn-danger btn-xs pull-right vue-btn">Delete</button>
                {{ task.body }}

                <!-- <button @click="deleteTask(task.id)" class="btn btn-danger btn-xs pull-right vue-btn">Delete</button> -->
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                list: [],
                task: {
                    id: '',
                    body: ''
                }
            };
        },
        
        created() {
            this.fetchTaskList();
        },
        
        methods: {
            fetchTaskList() {
                axios.get('api/tasks').then((res) => {
                    this.list = res.data;
                });
            },
 
            createTask() {
                axios.post('api/tasks', this.task)
                    .then((res) => {
                        this.task.body = '';
                        this.edit = false;
                        this.fetchTaskList();
                    })
                    .catch((err) => console.error(err));
                },
 
            deleteTask(id) {
                axios.delete('api/tasks/' + id)
                    .then((res) => {
                        this.fetchTaskList()
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>
</script>