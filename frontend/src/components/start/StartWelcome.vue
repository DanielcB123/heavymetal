<template>
<div class="w-screen h-screen flex flex-col my-box-shadow">
		<div class="w-full flex justify-center mt-64 welcome-body">
			<!-- <div class="w-full h-full flex"> -->
			<h1 class="w-screen flex justify-center text-white text-5xl body-header-text my-box-shadow">Crush Your Inconveniences.&ensp;Power Your Future.</h1>
		</div>

		<div class="flex justify-center bg-green-500 mt-96">
			<div class="-mt-96 w-1/2 flex justify-center text-white text-xl my-box-shadow">
			<!-- <div class="w-1/2 flex justify-center text-white text-xl my-box-shadow"> -->
				<div class="mt-24">
					<p class="flex justify-center body-text">Our mission at Heavy Metal is aligning</p>
					<p class="flex justify-center body-text"> fitness and business with aptitude,</p>
					<p class="flex justify-center body-text"> strength, and energy</p>
				</div>
			</div>
		</div>
</div>

</template>
<script>
export default {
    name:'StartWelcome'
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@1,100&family=Montserrat:wght@100;200&family=Orbitron&family=Raleway:wght@300&family=Rubik+Dirt&display=swap');

.body-header-text{
font-family: 'Raleway', sans-serif;
}
.body-text{
font-family: 'Inter Tight', sans-serif;
font-family: 'Montserrat', sans-serif;

}

@media screen and (max-width: 765px) {
	.welcome-body{
		margin-top:11rem;
	}
}
</style>