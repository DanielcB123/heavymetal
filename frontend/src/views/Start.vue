<template>

	<div class="w-screen h-screen flex flex-col my-box-shadow">











  <Teleport to="body">




  <div v-if="open" class="flex justify-center fixed z-50 bg-opacity-70 bg-neutral-900 p-5 text-blue-500 w-100 h-full">
	<div class="w-5/6 sm:w-1/3 sm:h-5/12 m-auto rounded-sm bg-slate-400 p-3 ">
		<form @submit.prevent="login" class="align-center bg-slate-300">
			<h3 class="flex justify-center bg-slate-300 p-2 text-white text-2xl">Login</h3>

			<div class="grid place-items-center">
				<p v-if="error" style="color:red">{{error}}</p>
				<input type="email" placeholder="Email" id="email" v-model="form.email" class="w-3/4 rounded-sm py-2 px-3"><br/>
				<input type="password" placeholder="Password" id="password" v-model="form.password" class="w-3/4 rounded-sm py-2 px-3"><br/>
			</div>

			<div class="w-full flex justify-center bg-slate-300">
				<button @click="login" type="submit" class="w-1/5 rounded-md p-2 mb-2 bg-blue-400 hover:bg-blue-500 duration-100 text-white mr-5">Login</button>
				<button @click="open = false" type="submit" class="w-1/5 rounded-md p-2 mb-2 bg-gray-400 hover:bg-gray-500 duration-100 text-white">Cancel</button>

			</div>
			

		</form>
		<RouterLink class="text-white" to="register">Register</RouterLink>
	</div>
  </div>

</Teleport>





















		<div class="video-wrapper">
			<video playsinline autoplay muted loop poster="@/assets/videos/Metal.mp4">
				<source src="@/assets/videos/Metal.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>

		<!-- NAVIGATION -->

		<div class="flex justify-wrap">
			<div class="w-full flex justify-end pr-20">
				<span class="w-full h-20 flex justify-between items-center nav">



					<div></div>

					<div class="w-1/2 text-white hm-font flex justify-between">
						<p @click="activeTab = 'StartWelcome'" class="text-white hover:cursor-pointer">Home</p>	
						<p class="here-white">Employers</p>	
						<p class="text-white">Partners</p>	
						<p class="text-white">Documentation</p>	
						<p @click="activeTab = 'StartAbout'" class="text-white hover:cursor-pointer">About</p>					
					</div>
					<div class="w-1/6 flex justify-end pr-10">
						<div @click="open = true" class="text-white flex" to="login">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-login w-7 pr-2">
							<path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
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
		<StartWelcome v-if="activeTab === 'StartWelcome'"/>
		<StartAbout v-if="activeTab === 'StartAbout'"/>

		<!-- <div class="w-full h-full flex bg-red-400">

			<h1 class="m-auto text-white text-5xl body-header-text my-box-shadow">Crush Your Inconveniences.&ensp;Power Your Future.</h1>
		</div>

		<div class="flex justify-center">
			<div class="-mt-28 w-1/4 flex justify-center text-white text-xl my-box-shadow">
				<div>
					<p class="flex justify-center body-text">Our mission at Heavy Metal is aligning</p>
					<p class="flex justify-center body-text"> fitness and business with aptitude,</p>
					<p class="flex justify-center body-text"> strength, and energy</p>
				</div>
			</div>
		</div> -->



		<div class="w-full h-1/2 mt-auto flex justify-center footer pb-0">
			<div class="flex mt-auto justify-between p-5">
				<RouterLink class="rounded-full text-white px-5 py-2 mx-5 join-btn" to="#">JOIN</RouterLink>
				<RouterLink class="rounded-full text-white px-5 py-2 mx-5 watch-video-btn" to="#">WATCH FULL VIDEO </RouterLink>
				<RouterView />
			</div>
		</div>
	
		<div class="hm-logo"></div>
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

function test(){
	console.log(activeTab.value)
}



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



</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Orbitron&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Orbitron&family=Rubik+Dirt&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Montserrat:wght@100;200&family=Orbitron&family=Rubik+Dirt&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Montserrat:wght@100;200&family=Orbitron&family=Raleway:wght@300&family=Rubik+Dirt&display=swap');
.body-text{
font-family: 'Inter Tight', sans-serif;
font-family: 'Montserrat', sans-serif;

}

.my-box-shadow{
	/* padding: 1rem; */
	/* border-radius: 30px; */
	/* z-index: 50;
	background-color: brown; */
	/* box-shadow: 0 0px 40px 2rem rgba(0, 0, 0, 0.55); */
}

.body-header-text{
font-family: 'Raleway', sans-serif;
}

.svg-login{
	fill: rgb(255, 255, 255);
}

.hm-logo{
	/* background-color: brown; */
/* position: relative; */
/* width: 400px; */
/* background-image: url('@/assets/images/hm-logo.png'); */
}
.hm-logo:before{
  content: ' ';
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
}

.hm-font{
	font-family: 'Inter Tight', sans-serif;
  	font-family: 'Orbitron', sans-serif;
}
.nav{	
	
	width: 80%;
	border-bottom: 2px solid rgba(255, 255, 255, 0.7);
	background-image: linear-gradient(to right, rgba(0, 0, 0, 0) , rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
	box-shadow: 0 30px 40px -2rem rgba(0, 0, 0, 0.70);
}

.video-wrapper {
  /* Telling our absolute positioned video to 
  be relative to this element */
  position: fixed;
	opacity: .50;
  width: 100vw;
  height: 100vh;

  /* Will not allow the video to overflow the 
  container */
  overflow: hidden;

  /* Centering the container's content vertically 
  and horizontally */
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
}
.footer{
	/* box-shadow: 0 -40px 40px -2rem rgba(0, 0, 0, 0.90); */
	height: 10rem;
	background-image: linear-gradient(rgba(0, 0, 0, 0), rgb(0, 0, 0));
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






















</style>

