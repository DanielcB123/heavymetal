<template>
<div class="nav">
    
    
  <header class="">
    <div class="out1">
      <h1 class="logo in1" style="">
        <!-- Your Gym Here -->
        Your Gym Here
      </h1>

      <nav class="in2">
        <div style="" class="nav-menu in2">
          <div class="x">
            <button class="y">Login</button>
            <button class="y">About</button>
            <button class="y">Contact</button>
          </div>
        </div>
      </nav>
    </div>

  <!-- <button class="order-online">Order Online</button> -->
  </header>
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0, 103, 216, 0.25)" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(77, 172, 202, 0.8)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(0, 195, 216, 0.25)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(0, 105, 146, 0.849)" />
</g>
</svg>
</div>


</div>
</template>

<style scoped>
/* @import url('https://fonts.googleapis.com/css2?family=Smooch&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap'); */
.test{
  width: 30%;
  background-color: brown;
}
.nav-menu{
  margin-right: 0rem;
  width: 150vh;
  /* display: flex;
  flex-wrap: wrap;
  flex: flex-end; */
  /* background-color: blueviolet; */

}
.nav{
  
  /* width: 100vw; */
    position: fixed;
    /* background-color: brown; */
  
}
.out1{
  /* background-color: blue; */
  
  padding-top: 1rem;
  min-width: 90vw;
    display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.in1{
      display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  /* background-color: rgb(255, 0, 0); */
  width: 20%;
/* flex: */
}.in2{

  width: 30%;
  /* background-color: rgb(60, 255, 0); */

}
.x{
  margin-left: -65%;
  margin-top: 10%;
  /* background-color: aqua; */
  width: 330%;
    display: flex;
  flex-wrap: wrap;
  justify-content: flex-end;
}
.y{

}
header{
 position: fixed;
 height: 6.5rem;
 padding-bottom: 2rem;
 width: 100%;
 top: 0;
 display: flex;
 justify-content: space-evenly;
 place-items: center;
 background-color: rgba(0, 62, 87, 0.911);
 z-index: 2;
}
.logo{
 /* text-transform: uppercase; */
 width: 75vh;
 margin-left: 3%;
 color: rgb(218, 218, 218);
 font-size: 2.2em;
  font-variant: small-caps
}
.logo2{
 /* text-transform: uppercase; */
 /* width: 75vh; */
 margin-left: 0%;
 color: rgb(218, 218, 218);
 font-size: 2.2em;
  font-variant: small-caps
}
header nav button{
 background-color: transparent;
 border: 0;
 font-family: quicksand;
 color: white;
 text-transform: uppercase;
 font-size: 0.9em;
 cursor: pointer;
 transition-delay: 0s;
 transition-duration: 1s;
}
header nav button:hover{
 color: yellowgreen;
 transform: translate(0px, -4px);
 text-shadow: 0 6px 6px rgba(0,0,0,1);
}

.order-online:hover{
 transform: translate(0px, -4px);
 box-shadow: 0 6px 6px rgba(0,0,0,.2);
}

/* WAVES BENEATH HEADER */

.waves {
 transform: rotate(180deg) scale(1, 0.2);
  position: fixed;
  width: 100%;
  height:10rem;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
 margin-top: 1%;
 /* background-color: rgb(15, 152, 206); */
}
.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 4s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 7s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 10s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 17s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}

</style>
