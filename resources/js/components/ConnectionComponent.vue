<template>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="https://image.flaticon.com/icons/png/512/978/978012.png" sizes="30px"  id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form class="form-group px-4">
                <input type="" v-model="name" id="login" class="fadeIn second form-control my-2" name="login" placeholder="login">
                <input type="password" v-model="passw" id="password" class="fadeIn third form-control" name="login" placeholder="password">
            </form>
            <button @click="login" class="btn btn-primary" >Log in</button>
            <p>{{this.errorMessage}}</p>
            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            name:"",
            passw:"",
            errorMessage:""
        }
    },

    methods:{
      login(){
          if (this.name === ""){
              this.errorMessage = "Veuillez saisir un pseudo"
          } else if (this.passw === ""){
              this.errorMessage = "Veuillez saisir un mot de passe"
          } else{
              this.errorMessage = ""
          }
          console.log("login : "+this.name)
      }
    },
name: "ConnectionComponent"
}

</script>

<style scoped>

</style>
