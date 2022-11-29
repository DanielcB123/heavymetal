<template>
    <div class="flex justify-center">
        <form @submit.prevent="register" class="w-5/6 h-4/6 bg-white mt-12" >
        
            <h1>MUST THINK ABOUT businessS</h1>
            <h3>Register</h3>
            <button class="block bg-teal-400 hover:bg-teal-600 text-white uppercase text-lg mx-auto p-4 rounded" type="button" @click="btnClick('next')">Next</button>
        </form>
        
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


const activeTab = ref('');
const emit = defineEmits(['next', 'prev',])
function btnClick(param) {
    
    if(param == 'next'){
        emit('next')
        console.log("poop");
    }
    if(param == 'prev'){
        emit('prev')
    }
}






</script>

<style scoped>

</style>