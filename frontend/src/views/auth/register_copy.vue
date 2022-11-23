

<template>
    <div class="w-screen h-full bg-red-400 flex flex-wrap justify-center items-center big-container">
        <div class="w-full h-20 mt-2">
            <ul class="h-full flex justify-center items-center bg-orange-400 pl-12">
                <li id="bar1" @mouseover="changeColor1()" @mouseleave="changeColor1()" class="z-50 arrow bg-sky-200 py-1 w-1/5  -ml-7 flex justify-center hover:bg-red-600">Personal Info</li>
                
                <!-- <div class="w-7 mt-4 overflow-hidden inline-block z-10 "> -->
                    <!-- <div id="bar-arrow1" class="h-16 bg-sky-300 rotate-45 transform origin-top-left border-2 border-black hover:bg-red-600" @mouseover="changeColorArrow()" @mouseleave="changeColorArrow()"></div> -->
                <!-- </div> -->

                <li class="z-40 arrow bg-sky-300 py-1 w-1/5  -ml-16 flex justify-center">Business Info</li>

                <!-- <div class="w-7 mt-4 overflow-hidden inline-block z-10">
                    <div class="h-16 bg-sky-300 rotate-45 transform origin-top-left border-2 border-black"></div>
                </div> -->

                <li class="z-30 arrow bg-sky-400 py-1 w-1/5  border-black -ml-16 flex justify-center">Payment</li>

                <!-- <div class="w-7 mt-4 overflow-hidden inline-block z-10">
                    <div class="h-16 bg-sky-300 rotate-45 transform origin-top-left border-2 border-black"></div>
                </div> -->

                <li class="z-20 arrow bg-sky-500 py-1 w-1/5  border-black -ml-16 flex justify-center">Confirmation</li>

                <!-- <div class="w-7 mt-4 overflow-hidden inline-block z-10">
                    <div class="h-16 bg-sky-300 rotate-45 transform origin-top-left border-2 border-black"></div>
                </div> -->

                <li class="z-10 arrow bg-sky-600 py-1 w-1/5  border-black -ml-16 flex justify-center">Tutorial</li>

                <!-- <div class="w-7 mt-4 overflow-hidden inline-block z-10">
                    <div class="h-16 bg-sky-300 rotate-45 transform origin-top-left border-2 border-black"></div>
                </div> -->

             
            </ul>
        </div>
      
        <div class="w-screen h-full mt-2 bg-green-400 flex flex-wrap justify-center">
            <form @submit.prevent="register" class="">
                <!-- {{form}} -->
                <h1>MUST THINK ABOUT THIS NOT BEING REGISTRATION FOR USERS BUT FOR BUSINESSES. WHICH CREATE THEIR OWN INSTANCE OF THE APP. <br>
                 THIS FORM BELOW IS CREATING ACCESS TO THE APP. THIS IS WHY ON THE LOG IN PAGE WE NEED TO ASK FOR BUSINESS INFORMATION.<br>
                 BECAUSE THERE WILL BE MANY USERS AND BUSINESSES</h1>
                <h3>Register</h3>
                <!-- <p v-if="loading">loading...</p> -->
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
            </form>
        </div>



        
    </div>
</template>






<script setup>
import { RouterLink } from 'vue-router'
import { reactive, ref } from 'vue';
import  router  from '../../router';
import axios from 'axios';


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

function changeColor1(){
    console.log("ok");
    document.getElementById('bar-arrow1').classList.toggle('bg-red-600');
}

function changeColorArrow1(){
    document.getElementById('bar1').classList.toggle('bg-red-600');
}


</script>

<style scoped>
.arrow{
    clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
}

</style>