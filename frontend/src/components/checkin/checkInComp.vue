<template>
<div class="dynamic-parent" >

  <div class="bord">
    <h1 class="bord-b flex">
        <input type="text" class="checkin" placeholder="Client ID">
        <button class="w-1/5 bg-neutral-700 px-2 text-neutral-400 hover:bg-neutral-400 hover:text-white transition duration-150 ease-in-out">Check In</button>
    </h1>
      <li v-for="client in clients" v-bind:key="client.id" class="text-white mt-2">{{ client.name }} -- {{ client.email }} --{{ client.age }}</li>
  </div>

</div>
</template>

<script setup>

import {onMounted, computed, ref} from 'vue'

const props = defineProps({
    isOpened: Boolean
});

import axios from 'axios'

import { ClientStore } from '../../stores/client/clientStore'

const store = ClientStore();
const clients = computed(() => {
  return store.clients;
})

onMounted(() => {

  store.fetchClients();
  // window.addEventListener("scroll", () => {
  //   let height = window.innerHeight;
  //   let limit = Math.max( document.body.scrollHeight, document.body.offsetHeight, 
  //                  document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight );
  //   if (window.top.scrollY + height == limit || window.top.scrollY + height == limit - .5) {
  //       console.log("Loading", store.loadMoreTechs);
  //       store.loadMoreTechs();
  //   }
  // });
})
</script>



<style scoped>
.dynamic-parent{
  /* background-color: brown; */
    /* border-style: solid; */
    /* border-color: rgb(47, 41, 66); */
    padding: 3rem;
}

.bord{
  padding: 1rem;
  border-radius: .2rem;
  border-style: solid;
  border-width: .1rem;
  border-color: #74747441;
  height: 100vh;
}

.bord-b{
  /* padding: 1rem;
  border-bottom: solid;
  border-width: .1rem;
  border-color: #74747441; */
  border-bottom: .1rem solid #74747441;
  padding-bottom: 1rem;
}

.checkin{
  width: 80%;
  background: hsla(0, 0%, 0%, 0.014);
  padding: .5rem;
  border-radius: .1rem;
  border-style: solid;
  border-width: .1rem;
  border-color: #74747441;
  color: #c0c0c0;
  
}


.checkin::-webkit-input-placeholder {
     color: #c0c0c0; /*Change the placeholder color*/
     opacity: 0.2; /*Change the opacity between 0 and 1*/
}

.checkin:focus {
  outline: none;
}



</style>
