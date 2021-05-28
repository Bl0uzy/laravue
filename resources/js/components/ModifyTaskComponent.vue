<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <textarea v-model="taskToEdit" name="name" id="name" rows="4" class="form-control"></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" @click="editTask" data-dismiss="modal">Modifier ma tache</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'taskToEdit',
        'idTaskToEdit'
    ],
    data(){
        return{
            name:''
        }
    },

    methods:{
      editTask(){
          axios.patch('/tasks/edit/'+this.idTaskToEdit,{
              name:this.taskToEdit
          })
          .then(response =>this.$emit('task-updated',response))
          .catch(err=>console.log(err))
      }
    },

    mounted() {

    },

    name: "ModifyTaskComponent"
}
</script>

<style scoped>

</style>
