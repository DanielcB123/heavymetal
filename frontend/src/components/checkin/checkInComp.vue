<script setup>

// import {ref} from 'vue';
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

<template>
<div class="dynamic-parent" >
<h1>
    CHECK IN COMPONENT
</h1>
        <li v-for="client in clients" v-bind:key="client.id" class="text-white">{{ client.name }} -- {{ client.email }} --{{ client.age }}</li>

</div>
</template>

<script>
export default {
    name:'CheckiInComp'
}
</script>

<style scoped>
.dynamic-parent{
    padding: 3rem;
}
</style>
