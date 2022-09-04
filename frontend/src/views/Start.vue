<script setup>

  import { RouterLink, RouterView } from 'vue-router'
//   import HelloWorld from './components/landing/HelloWorld.vue'
//   import TheLanding from './components/landing/TheLanding.vue'

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
    <nav>
      <!-- <ul class="" style=""> -->
        <!-- <li> -->
          <RouterLink class="text-white" to="login">Login</RouterLink><br/>
        <!-- </li> -->
        <!-- <li> -->
          <RouterLink class="text-white" to="register">Register</RouterLink>
        <!-- </li> -->

      <!-- </ul> -->

      
    </nav>



    <RouterView />
  </div>
  
  
  
  

  
</template>

<style scoped>


</style>

