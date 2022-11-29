<template>
    <div class="w-1/3 mt-8">
        <!-- <form @submit.prevent="register" class="w-5/6 h-4/6 bg-white mt-12 shadow-2xl">
        
            <h1>MUST THINK ABOUT THIS NOT BEING REGISTRATION FOR USERS BUT FOR BUSINESSES. WHICH CREATE THEIR OWN INSTANCE OF THE APP. <br>
                THIS FORM BELOW IS CREATING ACCESS TO THE APP. THIS IS WHY ON THE LOG IN PAGE WE NEED TO ASK FOR BUSINESS INFORMATION.<br>
                BECAUSE THERE WILL BE MANY USERS AND BUSINESSES MUST THINK ABOUT THIS NOT BEING REGISTRATION FOR USERS BUT FOR BUSINESSES. WHICH CREATE THEIR OWN INSTANCE OF THE APP. <br>
                THIS FORM BELOW IS CREATING ACCESS TO THE APP. THIS IS WHY ON THE LOG IN PAGE WE NEED TO ASK FOR BUSINESS INFORMATION.<br>
                BECAUSE THERE WILL BE MANY USERS AND BUSINESSES MUST THINK ABOUT THIS NOT BEING REGISTRATION FOR USERS BUT FOR BUSINESSES. WHICH CREATE THEIR OWN INSTANCE OF THE APP. <br>
                THIS FORM BELOW IS CREATING ACCESS TO THE APP. THIS IS WHY ON THE LOG IN PAGE WE NEED TO ASK FOR BUSINESS INFORMATION.<br>
                BECAUSE THERE WILL BE MANY USERS AND BUSINESSES MUST THINK ABOUT THIS NOT BEING REGISTRATION FOR USERS BUT FOR BUSINESSES. WHICH CREATE THEIR OWN INSTANCE OF THE APP. <br>
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
        </form> -->
<!-- <div class="w-screen flex justify-center items-center h-screen w-full bg-neutral-300"> -->
    <div class="w-full bg-white rounded shadow-2xl p-8 m-4">
        <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Personal</h1>
        <form action="/" method="post">
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">First Name</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Last Name</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
                <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="password">Phone Number</label>
                <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="password">
            </div>
            <button class="block bg-teal-400 hover:bg-teal-600 text-white uppercase text-lg mx-auto p-4 rounded" type="button" @click="btnClick('next')">Next</button>
        </form>
        <!-- <a class="block w-full text-center no-underline mt-4 text-sm text-gray-700 hover:text-gray-900" href="/login">Already have an account?</a> -->
    </div>
<!-- </div> -->
    </div>
</template>

<script>
export default {
    name:'PersonalInfo'
}
</script>


<script setup>
import { RouterLink } from 'vue-router'
import { reactive, ref, onMounted, defineEmits } from 'vue';
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



const emit = defineEmits(['next', 'prev',])
function btnClick(param) {
    if(param == 'next'){
        emit('next')
    }
    if(param == 'prev'){
        emit('prev')
    }
    
    
    // emit('prev', params)
}



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