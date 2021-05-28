<template>
    <div class="container">
        <add-task @task-added="refresh"></add-task>

        <ul class="list-group">

                <li class="list-group-item d-flex justify-content-between align-items-center" v-for="task in tasks.data" :key="task.id">
                    <a href="#">{{ task.name }}</a>
                    <div>
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModal" @click="getTask(task.id)">
                            Editer
                        </button>
                        <button type="button" class="btn btn-danger" @click="deleteTask(task.id)">Supprimer</button>
                    </div>
                </li>
            <modify-task @task-updated="refresh" v-bind:taskToEdit="taskToEdit" v-bind:idTaskToEdit="idTaskToEdit"></modify-task>

            </ul>
        <pagination :data="tasks" @pagination-change-page="getResults" class="mt-5"></pagination>

    </div>
</template>

<script>
export default {
    data(){
        return{
            tasks:{},
            taskToEdit:"",
            idTaskToEdit:"",
        }
    },

    created() {
      axios.get("/tasksList")
        .then(response => this.tasks = response.data)
        .catch(error=>console.log(error))
    },

    methods:{
        getResults(page = 1) {
            axios.get('/tasksList?page=' + page)
                .then(response => {
                    this.tasks = response.data;
                });
        },

        deleteTask(id){
          axios.delete('/tasks/'+id)
          .then(res => this.tasks = res.data)
          .catch(err => console.log(err))
        },

        refresh(tasks){
            this.tasks = tasks.data
        },

        getTask(id){
            axios.get('/tasks/edit/'+id)
            .then(response => {
                this.taskToEdit = response.data.name
                this.idTaskToEdit = id
            })
            .catch(err=>console.log(err))
        }
    },

    name: "TaskComponent"
}
</script>

<style scoped>

</style>
