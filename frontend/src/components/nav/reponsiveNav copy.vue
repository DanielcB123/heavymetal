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
        <div id="nav-icon4" class="flex sm:hidden" @click="toggleNav();hamburger()">
            <span></span>
            <span></span>
            <span></span>
        </div>
      </div>

      <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
      <ul
        :class="showMenu ? 'sm:flex' : 'test hidden'"
        class="
          flex-col
          mt-8
          space-y-4
          md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0 mr-16
        "
      >
        <li class="text-gray-100 hover:text-indigo-400 z-50 hover:cursor-pointer">Home</li>
        <li class="text-gray-100 hover:text-indigo-400 z-50 hover:cursor-pointer">
          <div class="w-48 p-2 flex bg-red-400">
            Help
          </div>
          
        </li>
        <li class="text-gray-100 hover:text-indigo-400 z-50 hover:cursor-pointer">


          <ul class="w-24 flex">
            <li class="group  relative dropdown text-white hover:text-purple-700 cursor-pointer font-bold text-base tracking-wide">
                  <div class="w-52 p-2 flex bg-red-400">
                    <div class="w-4 flex items-center justify-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#f8fafc" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0
                         45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 
                         208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5
                          144 144 144z"
                        />
                      </svg>
                    </div>
                    <p class="pl-2 flex items-center justify-center">Search</p>
                  </div>
                  <div class="group-hover:block dropdown-menu absolute hidden h-auto">
                    <ul class="top-0 w-48 bg-white shadow px-6 py-8">
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 2</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 3</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 4</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 5</a></li>
                    </ul>
                  </div>
              </li>
          </ul>


        </li>
        <li class="text-gray-100 hover:text-indigo-400 z-50 hover:cursor-pointer w-32 flex ">
          <ul class="w-full flex ">
            <li class="group  relative dropdown text-white hover:text-purple-700 cursor-pointer font-bold text-base tracking-wide sm:rounded-md sm:border-2 sm:border-slate-100 sm:bg-slate-800">
                  <div class="w-48 p-2 flex">
                    <div class="w-6 flex items-center justify-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#f8fafc" d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 
                          32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 
                          119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 
                          57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 
                          80S144 172.1 144 128C144 83.89 179.9 48 224 48z"
                        />
                      </svg>
                    </div>
                    <p class="pl-2 flex items-center justify-center">Daniel Burgess</p>
                  </div>
                  <div class="group-hover:block dropdown-menu absolute hidden h-auto">
                    <ul class="top-0 w-48 bg-white shadow px-6 py-8">
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 2</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 3</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 4</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 5</a></li>
                    </ul>
                  </div>
              </li>
          </ul>
        </li>
        <li class="sm:hidden text-sky-100 hover:text-indigo-400 z-50 hover:cursor-pointer">Check In</li>
        <li class="sm:hidden text-sky-100 hover:text-indigo-400 z-50 hover:cursor-pointer">Client Search</li>
        <li class="sm:hidden text-sky-100 hover:text-indigo-400 z-50 hover:cursor-pointer">Personal Training</li>
        <li class="sm:hidden text-sky-100 hover:text-indigo-400 z-50 hover:cursor-pointer">Classes</li>
        <li class="sm:hidden text-sky-100 hover:text-indigo-400 z-50 hover:cursor-pointer">Store</li>
        <li class="sm:hidden text-sky-100 hover:text-indigo-400 z-50 hover:cursor-pointer">Calendar</li>
        <li class="sm:hidden text-sky-100 hover:text-indigo-400 z-50 hover:cursor-pointer">Admin</li>
        <li class="sm:hidden text-sky-100 hover:text-indigo-400 z-50 hover:cursor-pointer"  @click="logout">Logout</li>
      </ul>


<div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
</div>



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
        document.getElementById('nav-icon4').classList.toggle('open');
    }
    

    function logout(){
    console.log('here');
    localStorage.removeItem('token');
    router.push({name: 'start'});
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
  width: 60px;
  height: 1rem;
  position: relative;
  padding-bottom: 2.5rem;
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
  z-index: 50;
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




.ocean { 
  /* height: 0px; */
  /* width:100%; */
  position:absolute;
  opacity: .08;
  /* bottom:0; */
  /* left:0; */
  /* background: #015871; */
}

.wave {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg) repeat-x; 
  position: absolute;
  top: -108px;
  width: 6400px;
  height: 150px;
  animation: wave 7s cubic-bezier( 0.36, 0.45, 0.63, 0.53) infinite;
  transform: translate3d(0, 0, 0);
}

.wave:nth-of-type(2) {
  top: -85px;
  animation: wave 7s cubic-bezier( 0.36, 0.45, 0.63, 0.53) -.125s infinite, swell 7s ease -1.25s infinite;
  opacity: 1;
}

@keyframes wave {
  0% {
    margin-left: 0;
  }
  100% {
    margin-left: -1600px;
  }
}

@keyframes swell {
  0%, 100% {
    transform: translate3d(0,-35px,0);
  }
  50% {
    transform: translate3d(0,-25px,0);
  }
}
.test{
  /* position: fixed;
  visibility: visible;
  background-color: red; */
}
.mobile-visibility-nav-options{
visibility: hidden;
}

@media screen and (max-width: 650px){
  .mobile-visibility-nav-options{
    visibility: hidden;
  }
}
</style>


