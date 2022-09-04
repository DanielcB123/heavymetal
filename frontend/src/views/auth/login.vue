

<template>
    <div>
        <form @submit.prevent="login">
            <!-- {{form}} -->
            <h3>Login</h3>
            <!-- <p v-if="loading">loading...</p> -->
            <p v-if="error" style="color:red">{{error}}</p>
            <input type="email" placeholder="Email" id="email" v-model="form.email"><br/>
            <input type="password" placeholder="Password" id="password" v-model="form.password"><br/>
            <button type="submit">Login</button>
        </form>
    <RouterLink class="text-white" to="register">Register</RouterLink>
    </div>
</template>



<script>
import { RouterLink } from 'vue-router'
import { reactive, ref } from 'vue';
// import { useRouter } from "vue-router";
// import { useRouter } from 'vue-router';
import  router  from '../../router';
import axios from 'axios';




   export default {
        
        setup(){
            let form = reactive({
                email: '',
                password: ''
            });
            let error = ref('');

            const login = async() => {
                await axios.post('http://localhost:8000/api/client/login', form).then(res => {
                    if(res.data.success){
                        // const useRouter = router();
                        localStorage.setItem('token',res.data.data.token)
                        router.push('landing')
                    }else{
                        error.value = res.data.message;
                    }
                });
            }

            return {
                form,
                login,
                error
            }
        }
        
   }



// <template>
//     <div>
//         <h3>Login</h3>
//         <p v-if="loading">loading...</p>
//         <p v-if="error" style="color:red">{{error}}</p>
//         <input type="text" placeholder="Email" v-model="user.email"><br/>
//         <input type="text" placeholder="Password" v-model="user.password"><br/>
//         <button @click="login">Login</button>
//     </div>
// </template>































// import axios from 'axios';
// export default {
//     name: 'login',

//     data(){
//         return{
//             user: {
//                 email: null,
//                 password: null
//             },
//             loading: false,
//             error: null
//         }
//     },

//     methods: {
//         async login(){
//             console.log("HI");
//             try{
//                 await axios.post('http://localhost:8000/api/client/login',form).then(res=>{
//                     console.log(res);
//                 })
//                 // await this.$store.dispatch('login', this.user);
//                 // await this.$router.push('posts')
//             } catch (error){
                
//             } finally {

//             }
//         }
//     }
// }
</script>