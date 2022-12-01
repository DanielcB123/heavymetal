<template>
    <div class="w-5/6 sm:w-1/2 mt-8 -ml-12 sm:ml-0">
        <div class="w-full bg-white rounded-sm shadow-2xl py-6 px-2 m-4">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Business</h1>
            <form action="/" method="post">
                <div class="flex justify-center mb-4">
                    <div class="w-1/2 flex flex-col pr-2">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">First Name</label>
                        <input type="text" placeholder="First Name" id="firstName" v-model="form.firstName"><br/>
                        <!-- <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name"> -->
                    </div>
                    <div class="w-1/2 flex flex-col">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Last Name</label>
                        <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" v-model="form.firstName">
                    </div>
                <!-- </div>
                <div class="flex flex-col mb-4"> -->

                </div>
                <div class="flex justify-center mb-4">
                    <div class="w-1/2 flex flex-col pr-2">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
                        <input class="border py-2 px-3 text-grey-800" type="email" name="email" id="email">
                    </div>
                    <div class="w-1/2 flex flex-col">
                        <label class="mb-2 font-bold text-lg text-gray-900" for="password">Phone Number</label>
                        <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="password">
                    </div>


                <!-- </div>
                <div class="flex flex-col mb-4"> -->

                </div>
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
    name:'BusinessInfo'
}
</script>


<script setup>
import { RouterLink } from 'vue-router'
import { reactive, ref, onMounted, defineEmits } from 'vue';
import router  from '../../router';
import axios from 'axios';

let form = reactive({
    firstName: '',
    lastName: '',
    email: '',
    password: '',
    c_password:'',
});


const activeTab = ref('');
const emit = defineEmits(['next', 'prev'])



function btnClick(param) {
    
    if(param == 'next'){
        emit('next', { form } )
        console.log("poop");
    }
    if(param == 'prev'){
        emit('prev')
    }
}






</script>

<style scoped>

</style>