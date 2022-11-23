<template>
    <div>
        <form @submit.prevent="register" class="bg-blue-300">
        
            <h1>MUST THINK ABOUT businessS</h1>
            <h3>Register</h3>
            
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
import { reactive, ref, onMounted } from 'vue';
import  router  from '../../router';
import axios from 'axios';









</script>

<style scoped>

</style>