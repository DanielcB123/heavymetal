<template>
  <div class="">
    <h1>This is the check in page</h1>
        <li v-for="client in clients" v-bind:key="client.id" class="text-white">{{ client.name }} -- {{ client.email }} --{{ client.age }}</li>
  </div>
</template>

<script setup>

import {onMounted, computed} from 'vue'
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

<style>
@media (min-width: 1024px) {
  .about {
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
}
</style>
