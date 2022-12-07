

<template>
    <div>
        <form @submit.prevent="register">
            <!-- {{form}} -->
            <h3>Register</h3>
            <!-- <p v-if="loading">loading...</p> -->
            <!-- <p style="color:red" v-for="error in errors" :key="error">
                <span v-for="err in error" :key="err"> {{ err }} </span>
            </p> -->
            <input type="text" placeholder="First Name" id="firstName" v-model="form.firstName"><br/>
            <input type="text" placeholder="Last Name" id="lastName" v-model="form.lastName"><br/>
            <input type="email" placeholder="Email" id="email" v-model="form.email"><br/>
            <input type="password" placeholder="Password" id="password" v-model="form.password"><br/>
            <input type="password" placeholder="Confirm Password" id="c_password" v-model="form.c_password"><br/>
            <button type="submit" class="bg-blue-400">Register</button>
        </form>
        <!-- <RouterLink class="text-white" to="login">Login</RouterLink> -->
    </div>
</template>



<script setup>
import { RouterLink } from 'vue-router'
import { reactive, ref } from 'vue';
import  router  from '../../router';
import axios from 'axios';




//    export default {
        
//         setup(){
            let form = reactive({
                firstName: '',
                lastName: '',
                email: '',
                password: '',
                c_password:'',
            });
            let error = ref('');

            const register = async() => {
                await axios.post('http://localhost:8000/api/client/register', form).then(res => {
                    if(res.data.success){
                        // const useRouter = router();
                        console.log('succ')
                        localStorage.setItem('token',res.data.data.token)
                        router.push('landing')
                    }else{
                        console.log('err')
                        error.value = res.data.message;

                    }
                });
            }

//             return {
//                 form,
//                 register,
//                 error
//             }
//         }
        
//    }





</script>

