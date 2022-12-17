<template>

    <div class="w-screen h-screen flex justify-start main-background">
        <div class="w-full ml-5 sm:w-7/12 sm:ml-0 h-4/6 bg-opacity-0 rounded-sm mt-0 p-4">
            <h1 class="block w-full text-center text-gray-400 text-2xl font-bold mb-6">New Client Sign-up</h1>
            <form class="" action="/" method="post">
                <div x-show="card">
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <div class="flex w-full px-1 flex-col">
                                <label class="block text-sm font-medium mb-1 text-gray-400" for="first_name">First Name</label>
                                <input v-model="new_client.firstName" class="text-sm text-gray-200 bg-gray-500 bg-opacity-30 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" name="first_name" id="first_name">
                            </div>
                            <div class="flex w-full px-1 flex-col">
                                <label class="block text-sm font-medium mb-1 text-gray-400" for="last_name">Last Name</label>
                                <input v-model="new_client.lastName" class="text-sm text-gray-200 bg-gray-500 bg-opacity-30 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" name="last_name" id="last_name">
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex w-full px-1 flex-col">
                                <label class="block text-sm font-medium mb-1 text-gray-400" for="email">Email</label>
                                <input v-model="new_client.email" class="text-sm text-gray-200 bg-gray-500 bg-opacity-30 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="email" name="email" id="email">
                            </div>
                            <div class="flex w-full px-1 flex-col">
                                <label class="block text-sm font-medium mb-1 text-gray-400" for="password">Phone Number</label>
                                <input v-model="new_client.phone_number" class="text-sm text-gray-200 bg-gray-500 bg-opacity-30 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="tel" name="phone_number" id="phone_number">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1 text-gray-400" for="card-name">Name on Card <span class="text-red-500">*</span></label>
                            <input v-model="new_client.payment_name_on_card" id="card-name" class="text-sm text-gray-200 bg-gray-500 bg-opacity-30 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="John Doe" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1 text-gray-400" for="card-nr">Card Number <span class="text-red-500">*</span></label>
                            <input v-model="new_client.payment_card_number" id="card-nr" class="text-sm text-gray-200 bg-gray-500 bg-opacity-30 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="1234 1234 1234 1234" />
                        </div>

                        <div class="flex">
                            <div class="flex-1 px-1">
                                <label class="block text-sm font-medium mb-1 text-gray-400" for="card-expiry">Expiry Date <span class="text-red-500">*</span></label>
                                <input v-model="new_client.payment_exp_date" id="card-expiry" class="text-sm text-gray-200 bg-gray-500 bg-opacity-30 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="MM/YY" />
                            </div>
                            <div class="flex-1 px-1">
                                <label class="block text-sm font-medium mb-1 text-gray-400" for="card-cvc">CVC <span class="text-red-500">*</span></label>
                                <input v-model="new_client.payment_cvc" id="card-cvc" class="text-sm text-gray-200 bg-gray-500 bg-opacity-30 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="CVC" />
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex w-full px-1 flex-col">
                                <label class="block text-sm font-medium mb-1 text-gray-400" for="email">Password</label>
                                <input v-model="new_client.password" class="text-sm text-gray-200 bg-gray-500 bg-opacity-30 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="password" name="password" id="password">
                            </div>
                            <div class="flex w-full px-1 flex-col">
                                <label class="block text-sm font-medium mb-1 text-gray-400" for="password">Confirm Password</label>
                                <input v-model="new_client.password_c" class="text-sm text-gray-200 bg-gray-500 bg-opacity-30 border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="password" name="password_c" id="password_c">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-3 flex">
                    <button class="block bg-teal-400 hover:bg-teal-600 text-white uppercase text-lg mx-auto px-4 py-2 rounded" type="button" @click="submit">Sumbit</button>
                </div>
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


let new_client = reactive({
    firstName: '',
    lastName: '',
    email: '',
    phone_number: '',
    payment_card_number: '',
    payment_name_on_card: '',
    payment_exp_date: '',
    payment_cvc: '',
    password: '',
    c_password:'',
});
let errors = ref('');



function submit(){
    const token = localStorage.getItem("token");
    console.log(new_client);
    console.log(token);
    // need to grab the token and get the user ad to get the companyID to add to the client table to identify what company the client is signed up for
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