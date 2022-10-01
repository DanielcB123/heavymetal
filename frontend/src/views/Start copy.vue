<template>

	<div class="w-screen h-screen flex flex-col">



		<div class="video-wrapper">
			<video playsinline autoplay muted loop poster="Metal.mp4">
				<source src="@/assets/videos/Metal.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>

		<!-- NAVIGATION -->

		<div class="flex justify-wrap">
			<div class="w-full flex justify-end pr-20">
				<span class="w-full h-20 flex items-center grid grid-cols-2 gap-3 px-3 nav">





<!-- 
					<div class="text-white hm-font  grid grid-cols-4">
						<p class="text-white col-start-4 col-end-4">Blog</p>					
					</div> -->
					<!-- <div class="text-white hm-font  grid grid-cols-4 gap-x-14"> -->
					<div class="text-white hm-font flex justify-between bg-red-300">
						<!-- <p class="here-white">here</p>		 -->
						<p class="here-white">Employers</p>	
						<p class="text-white">Partners</p>	
						<p class="text-white">Documentation</p>	
						<p class="text-white">About</p>					
					</div>
					
					<div class="w-5/6 flex justify-end bg-red-600">
						<RouterLink class="text-white" to="login">Login</RouterLink>
					</div>
				</span>
			</div>
		</div>

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

<script setup>
  import { RouterLink, RouterView } from 'vue-router'


</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Orbitron&display=swap');

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

