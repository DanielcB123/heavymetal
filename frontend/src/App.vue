<script setup>

  import { RouterLink, RouterView } from 'vue-router'


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
    <!-- <nav>
      <ul class="navbar-nav" style="position: fixed; z-index: 0">
        <li>
          <RouterLink class="text-white" to="login">Login</RouterLink>
        </li>
        <li>
          <RouterLink class="text-white" to="register">Register</RouterLink>
        </li>

      </ul>

      
    </nav> -->



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

