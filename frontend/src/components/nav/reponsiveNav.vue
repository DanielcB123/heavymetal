<template>
  <div class="nav-background-animation">
    <nav
      class="
        container
        px-6
        py-8
        mx-auto
        md:flex md:justify-between md:items-center
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
            logo
          "
          >Heavy Metal
        </router-link>
        <!-- Mobile menu button -->
        <!-- <div @click="toggleNav" class="flex md:hidden">
          <button
            type="button"
            class="
              text-gray-100
              hover:text-gray-400
              focus:outline-none focus:text-gray-400
            "
          >
            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
              <path
                fill-rule="evenodd"
                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
              ></path>
            </svg>
            
          </button>
 
        </div> -->
        <div id="nav-icon4" class="flex md:hidden" @click="toggleNav();hamburger()">
            <span></span>
            <span></span>
            <span></span>
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
        <li class="text-gray-100 hover:text-indigo-400"  @click="logout">Logout</li>
      </ul>
    </nav>
  </div>
</template>
<script setup>
import { computed, onMounted, onUnmounted, ref } from "vue"
import router from '../../router/index';

// export default {
//   setup() {

    // document.getElementById("nav-icon4").addEventListener("click", result);

    // function result(){
    //     let toggleAble = document.querySelector('.toggleable');
    //     toggleAble.classList.toggle('open');
    // }


    

/*



        ENDED HERE 9/29/22 10:10PM
        Status: testing the hamburger button with the function printing to console. Need to google search on how to toggle classes 
                within a function as to toggle the 'open' css class which initiates



*/

    function hamburger(){
        console.log("fuck");
        document.getElementById('nav-icon4').classList.toggle('open');
    }
    

    function logout(){
    console.log('here');
    localStorage.removeItem('token');
    router.push({name: 'app'});
    }


    let showMenu = ref(false);

    // const toggleNav = () => (showMenu.value = !showMenu.value);
    // return { showMenu, toggleNav };

    function toggleNav(){
        if(showMenu.value = !showMenu.value){
            return { showMenu, toggleNav };
        }
    }


    
//   }
// };
</script>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Orbitron&display=swap');


#nav-icon1, #nav-icon2, #nav-icon3, #nav-icon4 {
  /* width: 60px;
  height: 45px; */
  width: 60px;
  height: 1rem;
  position: relative;
  padding-bottom: 2.5rem;
  /* margin: 50px auto; */
  left: 0%;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .5s ease-in-out;
  -moz-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
  cursor: pointer;
}

#nav-icon1 span, #nav-icon3 span, #nav-icon4 span {
  display: block;
  position: absolute;
  height: 5px;
  width: 100%;
  background: #559fff;
  border-radius: 9px;
  opacity: 1;
  left: 0;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
}

#nav-icon4 {
}

#nav-icon4 span:nth-child(1) {
  top: 0px;
  -webkit-transform-origin: left center;
  -moz-transform-origin: left center;
  -o-transform-origin: left center;
  transform-origin: left center;
}

#nav-icon4 span:nth-child(2) {
  top: 18px;
  -webkit-transform-origin: left center;
  -moz-transform-origin: left center;
  -o-transform-origin: left center;
  transform-origin: left center;
}

#nav-icon4 span:nth-child(3) {
  top: 36px;
  -webkit-transform-origin: left center;
  -moz-transform-origin: left center;
  -o-transform-origin: left center;
  transform-origin: left center;
}

#nav-icon4.open span:nth-child(1) {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  top: -3px;
  left: 8px;
}

#nav-icon4.open span:nth-child(2) {
  width: 0%;
  opacity: 0;
}

#nav-icon4.open span:nth-child(3) {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  top: 39px;
  left: 8px;
}
.nav-background-animation{
 	background: linear-gradient(-45deg, #200909, #21566b, #161d33, #102242);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	/* height: 100vh;  */
}
.logo{
  font-family: 'Inter Tight', sans-serif;
  font-family: 'Orbitron', sans-serif;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
</style>


