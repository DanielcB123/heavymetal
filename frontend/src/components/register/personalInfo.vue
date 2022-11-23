<template>
    <div>
        <form @submit.prevent="register" class="bg-blue-300">
        
            <h1>MUST THINK ABOUT THIS NOT BEING REGISTRATION FOR USERS BUT FOR BUSINESSES. WHICH CREATE THEIR OWN INSTANCE OF THE APP. <br>
                THIS FORM BELOW IS CREATING ACCESS TO THE APP. THIS IS WHY ON THE LOG IN PAGE WE NEED TO ASK FOR BUSINESS INFORMATION.<br>
                BECAUSE THERE WILL BE MANY USERS AND BUSINESSES</h1>
            <h3>Register</h3>
            
            <p style="color:red" v-for="error in errors" :key="error">
                <span v-for="err in error" :key="err"> {{ err }} </span>
            </p>
            <input type="text" placeholder="First Name" id="firstName" v-model="form.firstName"><br/>
            <input type="text" placeholder="Last Name" id="lastName" v-model="form.lastName"><br/>
            <input type="email" placeholder="Email" id="email" v-model="form.email"><br/>
            <input type="password" placeholder="Password" id="password" v-model="form.password"><br/>
            <input type="password" placeholder="Confirm Password" id="c_password" v-model="form.c_password"><br/>
            <button type="submit">Register</button>
            <!-- <RouterLink class="text-white" to="login">Login</RouterLink> -->
        </form>
    </div>
</template>

<script>
export default {
    name:'PersonalInfo'
}
</script>


<script setup>
import { RouterLink } from 'vue-router'
import { reactive, ref, onMounted } from 'vue';
import  router  from '../../router';
import axios from 'axios';
const activeTab = ref('');

let form = reactive({
    firstName: '',
    lastName: '',
    email: '',
    password: '',
    c_password:'',
});
let errors = ref('');







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
</script>

<style scoped>

</style>