<template>
  <div class="">
    <!-- <img src="@/assets/images/navBackground.jpg" alt=""> -->
    <!-- <div class="test"></div> -->
    <nav
      class="
        px-6
        py-6
        mx-auto
        md:flex md:justify-between md:items-center
       nav-cust
      "
    >
      <div class="flex items-center justify-between">
        <router-link
          to="/"
          class="
            text-xl
            font-bold
            text-gray-100
            md:text-2xl
            hover:text-indigo-400
          "
          >Logo
        </router-link>
        <!-- Mobile menu button -->
        <div @click="toggleNav" class="flex md:hidden">
          <button
            type="button"
            class="
              text-gray-100
              hover:text-gray-400
              focus:outline-none focus:text-gray-400
            "
          >
          <!-- <h1>here is menu lines</h1> -->
            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
              <path
                fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
              ></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
      <ul
        :class="showMenu ? 'flex' : 'hidden'"
        class="
          flex-col
          mt-8
          space-y-4
          md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0
        "
      >
        <li class="text-gray-100 hover:text-indigo-400">Home</li>
        <li class="text-gray-100 hover:text-indigo-400">About</li>
        <li class="text-gray-100 hover:text-indigo-400">Blogs</li>
        <li class="text-gray-100 hover:text-indigo-400">Contact Us</li>
        <button type="button" class="text-gray-100 hover:text-indigo-400"  @click="logout">Logout</button>
      </ul>
    </nav>
  </div>
</template>
<script>
import { ref } from 'vue';
export default {
  setup() {
    let showMenu = ref(false);
    const toggleNav = () => (showMenu.value = !showMenu.value);
    return { showMenu, toggleNav };
  },
};
</script>

<script setup>
import { computed, onMounted, onUnmounted, ref } from "vue"
import router from '../../router/index';

function logout(){
  
  console.log('here');
  localStorage.removeItem('token');
  router.push({name: 'app'});
}


</script>




<style scoped>

/* Right here find background image for nav. Not too much like pier picture */



.nav-cust{
  /* background-image: url('@/assets/images/navback.jpg'); */
  background-size: 100%;
  background-color: rgba(26, 29, 82, 0.493);
}
.navBackground{
position: relative;
}
.navBackground:before{
  content: ' ';
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 5%;
  background-image: url('@/assets/images/navback.jpg');
  background-repeat: no-repeat;
  background-position: 50% 0;
  background-size: cover;
}
.navBackground-position{
  position: relative;
}
</style>