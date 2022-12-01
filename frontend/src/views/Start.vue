<template>
	<div class="big-container">

	
		<div class="video-wrapper">
			<video playsinline autoplay muted loop poster="@/assets/videos/Metal.mp4" id="bgVideo">
				<source src="@/assets/videos/Metal.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>


		<Teleport to="body">

		<div v-if="open" class="flex justify-center fixed z-50 bg-opacity-70 bg-neutral-900 p-5 text-blue-500 w-100 h-full">
			<div class=" sm:w-6/12 md:h-10/12 lg:w-4/12 m-auto rounded-lg bg-slate-400 p-3 bg-opacity-90">
				<form @submit.prevent="login" class="align-center bg-slate-500 bg-opacity-90">
					<h3 class="flex justify-center bg-slate-500 bg-opacity-80 p-2 text-white text-2xl">Login</h3>

					<div class="grid place-items-center">
						<p v-if="error" style="color:red">{{error}}</p>
						<!-- <input type="email" placeholder="Business ID" id="email" class="w-3/4 rounded-sm py-2 px-3"><br/> -->
						<input type="email" placeholder="Email" id="email" v-model="form.email" class="w-3/4 rounded-sm py-2 px-3"><br/>
						<input type="password" placeholder="Password" id="password" v-model="form.password" class="w-3/4 rounded-sm py-2 px-3"><br/>
					</div>

					<div class="w-full flex justify-center bg-slate-500 bg-opacity-80">
						<button @click="login" type="submit" class="w-1/4 rounded-md p-2 mb-2 bg-blue-400 hover:bg-blue-500 duration-100 text-white mr-5">Login</button>
						<button @click="open = false ; clearInput()" type="submit" class="w-1/3 rounded-md p-2 mb-2 bg-gray-400 hover:bg-gray-500 duration-100 text-white">Cancel</button>

					</div>
					

				</form>
				
				<RouterLink class="text-white" to="register">Register</RouterLink>
				
			</div>
			
		</div>
		<!-- <button @click="test()" class="bg-red-500 z-50 ml-64"> here</button> -->
		</Teleport>


		<!-- MOBILE NAVIGATION -->
		
		<!-- <div class="fixed grid grid-cols-6 gap-2 z-50 h-16 bg-gray-300 opacity-80 bottom-0 w-full md:hidden"> -->
		<div class="fixed flex flex-wrap justify-between z-50 h-16 bg-gray-300 opacity-80 bottom-0 w-full md:hidden">
			<!-- <div></div> -->
			<!-- <div></div> -->



			<!-- <div class="w-3/4"> -->
				<button v-on:click="test()" class="z-50 w-auto text-black font-extrabold my-2 ml-4 px-1 text-xs"> 
					<div class="px-0 ml-16"> 
						<div class="w-1/6 px-3 flex justify-end pr-10 hover:cursor-pointer">
					
							<div @click="open = true" class="text-sky-900 flex p-2 bg-white border-2 border-sky-900 rounded" to="login">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-login w-7 pr-2">
									<path  fill="#0c4a6e" d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304
										272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 25test6c70.69 0 128-57.31 
										128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89
										80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
								</svg>
								<p class="text-lg">Login</p>
							</div>
						</div>
					</div>
				</button>
				<!-- <button v-on:click="test()" class="z-50 w-18 text-black font-extrabold my-2 px-2 text-xs bg-white border-2 border-cyan-800 rounded"> <p class="px-0"> Employers </p> </button>
				<button v-on:click="test()" class="z-50 w-18 text-black font-extrabold my-2 px-2 text-xs bg-white border-2 border-cyan-800 rounded"> <p class="px-0"> Partners </p> </button>
				<button v-on:click="test()" class="z-50 w-18 text-black font-extrabold my-2 px-2 px-0 text-xs bg-white border-2 border-cyan-800 rounded"> <p class="px-0"> About </p> </button> -->
			<!-- </div> -->
			<!-- <button v-on:click="test()" class="z-50 my-2 px-1 text-xs bg-red-500"> Home</button>
			<button v-on:click="test()" class="z-50 my-2 px-1 text-xs bg-red-500"> Employers</button>
			<button v-on:click="test()" class="z-50 my-2 px-1 text-xs bg-red-500"> Partners</button>
			<button v-on:click="test()" class="z-50 my-2 px-1 text-xs bg-red-500"> About</button> -->


			<div class="h-100 w-1/4 flex justify-end items-center pr-3">
				<div id="nav-icon4" class="flex md:hidden" @click="toggleMobileNav();mobileHamburger()">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>


		</div>
		
		<div id="NavMenu" class="z-50 mb-16 fixed h-48 bg-gray-400 bottom-0 w-full hidden">
			<span @click="activeTab = 'StartWelcome'; toggleMobileNavClose()" class="w-full flex justify-center font-semibold h-12 py-2 btn shiny">HOME</span>
			<span @click="activeTab = 'StartAbout'; toggleMobileNavClose()" class="w-full flex justify-center font-semibold h-12 py-2 btn shiny">ABOUT</span>
			<span class="w-full flex justify-center font-semibold h-12 py-2 btn shiny">EVENTS</span>
			<span class="w-full flex justify-center font-semibold h-12 py-2 btn shiny">PARTNERS</span>
			<!-- <span class="w-full flex justify-center h-12 py-2 btn shiny">TEST</span> -->
			
		</div>














		<!-- END OF MOBILE NAVIGATION -->

		<!-- DESKTOP NAVIGATION -->
		
		<div class="flex justify-wrap top-shadow hidden md:block">
		<!-- <div class="flex justify-wrap top-shadow min-[320px]:hidden"> -->
	
		<Logo />
	
			
			<div class="w-full flex justify-end pr-20">
				<span class="w-full h-20 flex justify-between items-center nav">



					<div></div>

					<div class="w-1/2 text-white hm-font flex justify-between nav-options">
						<p @click="activeTab = 'StartWelcome'" class="z-50 text-gray-300 hover:text-white hover:cursor-pointer duration-300 nav-text">Home</p>	
						<p class="text-gray-300 hover:text-white hover:cursor-pointer duration-300 nav-text">Events</p>	
						<p class="text-gray-300 hover:text-white hover:cursor-pointer duration-300 nav-text">Partners</p>	
						<!-- <p class="text-gray-300 hover:text-white hover:cursor-pointer duration-300 nav-text">Documentation</p>	 -->
						<p @click="activeTab = 'StartAbout'" class="text-gray-300 hover:text-white hover:cursor-pointer duration-300 nav-text">About</p>					
					</div>
					<div class="w-1/6 flex justify-end pr-10 hover:cursor-pointer">
					
						<div @click="open = true" class="text-white flex" to="login">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-login w-7 pr-2">
								<path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304
								 	272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 
								 	128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89
									80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
							</svg>
							<p class="text-lg">Login</p>
						</div>
					</div>
				</span>
			</div>
		</div>
		<!-- END OF NAVIGATION -->


          <!-- <ClientSearch v-if="activeTab === 'ClientSearch'"/>
          <CheckInComp v-if="activeTab === 'CheckInComp'"/> -->

		<!-- <StartAbout /> -->
	<div class="w-full flex justify-center">
		<StartWelcome v-if="activeTab === 'StartWelcome'"/>
		<StartAbout v-if="activeTab === 'StartAbout'"/>
	</div>
<!-- <h1 class="w-full bg-red-500 flex justify-center">TEST</h1> -->




		<div class="w-full h-1/2 mt-auto  flex justify-center footer">
			<div class="flex mt-auto justify-between p-5">
				<RouterLink class="rounded-full mt-12 text-white px-5 py-2 mx-3 join-btn" to="register">JOIN</RouterLink>
				<RouterLink class="rounded-full mt-12 px-1 text-white px-0 py-2 mx-3 watch-video-btn" to="#">WATCH FULL VIDEO </RouterLink>
				<RouterView />
			</div>
		</div>
	<p class="hidden sm:block text-white fixed bottom-2 left-1 opacity-20 text-xs font-thin">Created By Daniel Burgess</p>
		<!-- <div class="hm-logo"></div> -->
		<!-- <Logo /> -->





















		<!-- </div> -->




			<!-- <video playsinline autoplay muted loop poster="@/assets/videos/Metal.mp4" id="">
				<source src="@/assets/videos/Metal.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video> -->
	</div>
</template>

<script>
import { RouterLink } from 'vue-router'
import { reactive, ref } from 'vue';
import  router  from '../router';
import axios from 'axios';




   export default {
        
        setup(){
            let form = reactive({
                email: '',
                password: ''
            });
            let error = ref('');

            const login = async() => {
                await axios.post('http://localhost:8000/api/client/login', form).then(res => {
                    if(res.data.success){
                        localStorage.setItem('token',res.data.data.token)
                        router.push('landing')
                    }else{
                        error.value = res.data.message;
                    }
                });
            }

            return {
                form,
                login,
                error
            }
        }
        
   }

</script>

<script setup>
import { ref, onMounted, reactive } from 'vue'
import { RouterLink, RouterView } from 'vue-router'
import StartAbout from '../components/start/StartAbout.vue'
import StartWelcome from '../components/start/StartWelcome.vue'
import Logo from '../components/start/Logo.vue'

let form = reactive({
	email: '',
	password: ''
});


const activeTab = ref('');
const open = ref(false);

onMounted(() => {
  activeTab.value = 'StartWelcome';
  console.log(activeTab);
})

// Need to clear input on error 10/26/22. Not dont yet!
const login = async() => {
	await axios.post('http://localhost:8000/api/client/login', form).then(res => {
		if(res.data.success){
			localStorage.setItem('token',res.data.data.token)
			router.push('landing')

		}else{
			error.value = res.data.message;
			// console.log("here");
			clearInput();
		}
	});
	clearInput();
}

function clearInput(){
	this.form.email = "";
	this.form.password = "";
}

// HAMBURGER MENU MOBILE FOTTER NAV
function toggleMobileNav(){
	console.log("TESGIN");
	document.getElementById('NavMenu').classList.toggle('mobileNavMenu');
	// document.getElementById('mobileNav').classList.toggle('open-mobile-nav');
}

function mobileHamburger(){
	document.getElementById('nav-icon4').classList.toggle('open');
}
function toggleMobileNavClose(){
	setTimeout(toggleMobileNav,1000);
}


function test(){
	console.log("TESTING TESTING")
}
// const toggleNav = () => (showMenu.value = !showMenu.value);
// return { showMenu, toggleNav };




</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Orbitron&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Orbitron&family=Rubik+Dirt&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Montserrat:wght@100;200&family=Orbitron&family=Rubik+Dirt&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Montserrat:wght@100;200&family=Orbitron&family=Raleway:wght@300&family=Rubik+Dirt&display=swap');

/* .big-container{
	width: 100vw;
	height: 100vh;
	max-width: 1800px;
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	overflow: hidden;
	border-radius: 0px;
	box-shadow: 0 0 20px #000;
} */
.container{
	width: 100vw;
	height: 100%;
	overflow: auto;
}
::-webkit-scrollbar{
	display: none;
}
video{
	/* width: 100vw; */
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	display: block;
	object-fit: cover;
	z-index: -1;
}
/* =============================================================================== */
.body-text{
font-family: 'Inter Tight', sans-serif;
font-family: 'Montserrat', sans-serif;

}


.top-shadow{
	/* width: 100vw; */
	background-image: linear-gradient(rgba(0, 0, 0, 0.50),rgba(0, 0, 0, 0));
	
}

.body-header-text{
font-family: 'Raleway', sans-serif;
}

.svg-login{
	fill: rgb(255, 255, 255);
}

.hm-logo{
	/* z-index: 50; */
	/* background-color: brown; */
/* position: relative; */
/* width: 400px; */
/* background-image: url('@/assets/images/hm-logo.png'); */
}
.hm-logo:before{
  /* content: ' ';
  display: block;
  position: fixed;
  left: 0;
  top: -5rem;
  width: 20%;
  height: 30%;
  opacity: 100%;
  background-image: url('@/assets/images/hm-logo.png');
  background-repeat: no-repeat;
  background-position: 50% 0;
  background-size: cover;
  margin-left: 1%;
  margin-top: 1%; */
}

.hm-font{
	font-family: 'Inter Tight', sans-serif;
  	font-family: 'Orbitron', sans-serif;
}
.nav{	
	
	width: 80%;
	border-bottom: 2px solid rgba(255, 255, 255, 0.3);
	background-image: linear-gradient(to right, rgba(0, 0, 0, 0) , rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
	box-shadow: 0 30px 40px -2rem rgba(0, 0, 0, 0.70);
	-webkit-transition: border-bottom .25s ease-out;
	-moz-transition: border-bottom.25s ease-out;
	-o-transition: border-bottom .25s ease-out;
	transition: border-bottom .25s ease-out;	
	
}
.nav:hover{	
	width: 80%;
	border-bottom: 2px solid rgba(255, 255, 255, 0.65);
	transition-duration: 250ms;
}

/* OLD */
.video-wrapper {
  	position: fixed;
	opacity: .50;
	width: 100vw;
	height: 100vh;
	overflow: hidden;
	text-align: center;
	display: flex;
	align-items: center;
	justify-content: center;
	
}

.footer{
	/* box-shadow: 0 -40px 40px -2rem rgba(0, 0, 0, 0.90); */
	/* height: 10rem; */
	position: absolute;
	bottom: 0;
	background-image: linear-gradient(rgba(0, 0, 0, 0), rgb(0, 0, 0));
	/* background: rgb(119, 6, 6); */
	
}
.join-btn{
	border: 2px solid;
	border-color: rgba(255, 255, 255, 0.75);
	background-image: linear-gradient(rgb(51, 120, 199), rgba(51, 85, 199, 0.5));
}
.join-btn:hover{
	/* border-color: rgba(255, 255, 255, 0); */
	/* background-image: linear-gradient(rgb(51, 85, 199), rgba(51, 85, 199, 0.85)); */
	/* background-color: rgb(101, 173, 255); */
	background-color: rgb(255, 255, 255);
}
.watch-video-btn{
	border: 2px solid;
	border-color: rgba(255, 255, 255, 0.75);
}
.watch-video-btn:hover{
	background-color: rgba(255, 255, 255, 0.2);
}


/* HAMBURGER MENU MOBILE FOTTER NAV */
.mobileNavMenu{
	display: block;
	/* background: rgb(255,0,0); */
	background: linear-gradient(90deg, rgba(211, 205, 205, 0.801) 0%, rgb(211, 211, 211) 49%, rgb(211, 205, 205, 0.801) 100%);
}


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
  background: #0c4a6e;
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

.open-mobile-nav{
	display: block;
}
/* MOBILE NAV MENU OPEN SELECTIONS */
.btn {
    position: relative;
    text-align: center;
    padding: .61538462em 1em;
    cursor: pointer;
    vertical-align: middle;
    color: #0c4a6e;
    border: 1px solid #0c4a6e;
    border-radius: 2px;
    background: linear-gradient(90deg, rgba(209,213,219, 0.0) 0%, rgb(211, 211, 211) 49%, rgba(209,213,219, 0.0) 100%);
    box-shadow: inset 0 1px 0 #66bfff;
}
.shiny::after {
    content: '';
    display: block;
    width: 70%;
    background: rgba(255, 255, 255, 0.2);
    background: linear-gradient(0deg, rgba(255, 255, 255, 0.2)50%, rgba(255, 255, 255, 0.7)100%); /* Safari 5.1-6.0 */
    background: -o-linear-gradient(0deg, rgba(255, 255, 255, 0.2)50%, rgba(255, 255, 255, 0.7)100%); /* Opera 11.1-12.0 */ 
    background: -moz-linear-gradient(0deg, rgba(255, 255, 255, 0.2)50%, rgba(255, 255, 255, 0.7)100%); /* Firefox 3.6-15 */
    background: linear-gradient(0deg, rgba(255, 255, 255, 0.2)50%, rgba(255, 255, 255, 0.7)100%); /* Standard syntax */

    left: -100%;
    top: 0;
    height: 100%;
    position: absolute;
    transition: none;
    -webkit-transition: none;
    -moz-transition: none;
    -o-transition: none;
    -ms-transition: none;
    -ms-transform: skewX(-20deg); /* IE 9 */
    -webkit-transform: skewX(-20deg); /* Safari */
    transform: skewX(-20deg);
}

.shiny:hover::after {
    left: 15%;
    transition: all .80s;
    -webkit-transition: all .80s;
    -moz-transition: all .80s;
    -o-transition: all .80s;
    -ms-transition: all .80s;
}

@media screen and (max-width: 1165px) {
	.nav-text{
		font-size: .725rem;
	}
	.nav-options{
		/* background: #000; */
		width: 60%;
	}
}
@media screen and (max-width: 765px) {
.footer{
	/* box-shadow: 0 -40px 40px -2rem rgba(0, 0, 0, 0.90); */
	height: 10rem;
	position: absolute;
	/* top: 0; */
	bottom: 87%;
	background-image: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0));
	/* background: rgb(119, 6, 6); */
	
}
.join-btn{
	border: 2px solid;
	height: 3rem;
	border-color: rgba(255, 255, 255, 0.75);
	background-image: linear-gradient(rgb(51, 120, 199), rgba(51, 85, 199, 0.5));
}
.watch-video-btn{
	border: 2px solid;

	width: 8.5rem;
	height: 3rem;
	font-size: .8rem;
	border-color: rgba(255, 255, 255, 0.75);
}
}



</style>