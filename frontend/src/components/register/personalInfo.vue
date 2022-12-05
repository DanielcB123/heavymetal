<template>
    <div class="w-5/6 sm:w-1/3 mt-8 -ml-12 sm:ml-0">
        <div class="w-full bg-white rounded-sm shadow-2xl p-8 m-4">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Personal</h1>
            <form @submit.prevent="register" class="w-5/6 h-4/6 bg-white mt-12">
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">First Name</label>
                    <!-- <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name"> -->
                    <input type="text" placeholder="First Name" id="firstName" v-model="form.firstName"><br/>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Last Name</label>
                    <input type="text" placeholder="Last Name" id="lastName" v-model="form.lastName">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
                    <input type="email" placeholder="Email" id="email" v-model="form.email">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="password">Password</label>
                    <input type="password" placeholder="Password" id="password" v-model="form.password">
                </div>

                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="password">Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" id="c_password" v-model="form.c_password">
                </div>

                <button class="block bg-teal-400 hover:bg-teal-600 text-white uppercase text-lg mx-auto p-4 rounded" type="button" @click="btnClick('next')">Next</button>
                <h1>{{form.firstName}}</h1>
            </form>
        </div>
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
    
    location: 'personal-next',
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
        // console.log("Inside personal info component ---> "+ form.firstName);
        emit('next',   form  )
    }
    if(param == 'prev'){
        emit('prev')
    }
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