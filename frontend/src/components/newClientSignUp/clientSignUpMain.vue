<template>

        <div class="w-screen h-screen flex justify-start main-background">
        <div class="w-7/12 h-4/6 bg-opacity-0 rounded-sm shadow-2xl mt-0 p-5">
            <h1 class="block w-full text-center text-gray-400 text-2xl font-bold mb-6">New Client Sign-up</h1>
            <form action="/" method="post">
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-400" for="first_name">First Name</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-400" for="last_name">Last Name</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-400" for="email">Email</label>
                    <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-400" for="password">Phone Number</label>
                    <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="password">
                </div>
                
                <div class="flex">
                    <button class="block bg-teal-400 hover:bg-teal-600 text-white uppercase text-lg mx-auto p-4 rounded" type="button" @click="btnClick('prev')">Prev</button>
                    <button class="block bg-blue-400 hover:bg-blue-600 text-white uppercase text-lg mx-auto p-4 rounded" type="button" @click="btnClick('skip')">Skip</button>                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name:'Tutorial'
}
</script>


<script setup>
import { RouterLink } from 'vue-router'
import { reactive, ref, onMounted, defineEmits } from 'vue';
import router  from '../../router';
import axios from 'axios';


const activeTab = ref('');
const emit = defineEmits(['next', 'prev','skip'])
function btnClick(param) {
    

    if(param == 'prev'){
        emit('prev')
    }
    if(param == 'skip'){
        emit('skip')
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
            errors.value = res.data.message;

        }
    });
}
</script>

<style scoped>
.main-background{
    background: rgba(15, 15, 15, 0);
}

</style>