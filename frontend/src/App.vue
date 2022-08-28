<script setup>

  import { RouterLink, RouterView } from 'vue-router'
  import HelloWorld from './components/landing/HelloWorld.vue'
  import TheLanding from './components/landing/TheLanding.vue'

</script>

<template>
  <!-- <header>
    <img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="125" height="125" />

    <div class="wrapper">
      <HelloWorld msg="You did it Daniel!" />

      <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
      </nav>
    </div>
  </header> -->
  <div>
    <!-- <div style="width:600px; background-color:">
      <TheLanding />
    </div>
     -->
    <RouterView />
  </div>
  
  
  
  

  
</template>

<style scoped>

/* .out{
  margin-left: -25rem;
  width: 100%;
  display: flex;
}
.in{
  display: flex;
  justify-content: space-between;
} */

</style>

