<template>
    <div class="w-5/6 sm:w-1/3 mt-8 -ml-12 sm:ml-0">
        <div class="w-full bg-white rounded-sm shadow-2xl p-8 m-4">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Confirmation</h1>
        <form @submit.prevent="register" class="w-5/6 h-4/6 bg-white mt-12">
        
            <h1></h1>
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
            <RouterLink class="text-white" to="login">Login</RouterLink>
                <div class="flex">
                    <button class="block bg-teal-400 hover:bg-teal-600 text-white uppercase text-lg mx-auto p-4 rounded" type="button" @click="btnClick('prev')">Prev</button>
                    <button class="block bg-teal-400 hover:bg-teal-600 text-white uppercase text-lg mx-auto p-4 rounded" type="button" @click="btnClick('next')">Next</button>
                </div>
        </form>
        </div>
    </div>
</template>

<script>
export default {
    name:'confirmation'
}
</script>


<script setup>
import { RouterLink } from 'vue-router'
import { reactive, ref, onMounted, defineEmits } from 'vue';
import router  from '../../router';
import axios from 'axios';


const activeTab = ref('');
const emit = defineEmits(['next', 'prev',])
function btnClick(param) {
    
    if(param == 'next'){
        emit('next')
        console.log("pee");
    }
    if(param == 'prev'){
        emit('prev')
    }
}

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