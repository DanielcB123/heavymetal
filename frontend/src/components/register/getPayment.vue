<template>
    <div class="w-5/6 sm:w-1/2 h-4/6 flex mt-8 -ml-12 sm:ml-0">
        <div class="w-1/2 bg-white rounded-sm shadow-2xl p-8 mt-4">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">HeavyMetal Plan</h1>
        </div>
        <div class="w-2/3 bg-white rounded-sm shadow-2xl p-8 mt-4">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Payment Info</h1>
            <form action="/" method="post" class="">
            <div class="w-full flex flex-wrap">
                <div class="w-full mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Name</label>
                    <input class="w-full border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name" placeholder="Card Holder's Name">
                </div>
                <div class=" w-full mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Number</label>
                    <input class="w-full border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" placeholder="Debit/Credit Card Number">
                </div>
            </div>
            <div class="w-full flex flex-wrap justify-between">
                <label class="w-full flex justify-start mb-2 font-bold text-lg text-gray-900" for="first_name">Expiration</label>
                <div class="w-5/12 mb-4">
                    <!-- <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Name</label> -->
                    <!-- <input class="w-full border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name" placeholder="Card Holder's Name"> -->
                    <select name="" id="" class="w-full border py-2 px-3 text-grey-800">
                        <option value="">Month</option>
                        <option value="">January</option>
                        <option value="">February</option>
                        <option value="">March</option>
                        <option value="">April</option>
                        <option value="">May</option>
                        <option value="">June</option>
                        <option value="">July</option>
                        <option value="">August</option>
                        <option value="">September</option>
                        <option value="">October</option>
                        <option value="">November</option>
                        <option value="">December</option>
                    </select>
                </div>
                <div class="w-5/12 mb-4">
                    <!-- <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Number</label> -->
                    <!-- <input class="w-full border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" placeholder="Debit/Credit Card Number"> -->
                    <select name="" id="" class="w-full border py-2 px-3 text-grey-800">
                        <option value="">Year</option>
                        <option value="">2023</option>
                        <option value="">2024</option>
                        <option value="">2025</option>
                        <option value="">2026</option>
                        <option value="">2027</option>
                        <option value="">2028</option>
                        <option value="">2029</option>
                        <option value="">2030</option>
                    </select>               
                </div>
            </div>

            <div class="w-full flex flex-wrap">
                <div class="w-full mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">CVV</label>
                    <input class="w-full border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name" placeholder="CVV">
                </div>
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
    name:'Payment'
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








</script>

<style scoped>

</style>