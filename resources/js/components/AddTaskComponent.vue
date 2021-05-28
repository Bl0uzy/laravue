<template>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn my-3 btn-primary" data-toggle="modal" data-target="#exampleModal">
            Ajouter une tâche
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Nom de la tache</label>
                                <textarea v-model="name" name="name" id="name" rows="4" class="form-control"></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" data-dismiss="modal" @click="taskStore">Créer ma tache</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            name:''
        }
    },

    methods:{
        taskStore(){
            axios.post('/tasksList',{
                name:this.name
            })
            .then(response => this.$emit('task-added',response))
            .catch(err=>console.log(err))
        }
    },

    mounted() {
        console.log('Component AddTask mounted.')
    }
}
</script>
