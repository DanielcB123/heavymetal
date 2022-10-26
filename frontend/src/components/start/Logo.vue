<template>
    <div class="hm-logo"></div>
</template>

<script>
export default {
    name:'Logo'
}
</script>

<style scoped>
.hm-logo{
	/* z-index: 50; */
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
  width: 15%;
  height: 25%;
  opacity: 100%;
  background-image: url('@/assets/images/hm-logo.png');
  background-repeat: no-repeat;
  background-position: 50% 0;
  background-size: cover;
  margin-left: 1%;
  margin-top: 1%;
  /* background-color: aqua; */
}

@media (max-width: 1700px) {
    .hm-logo:before{
    content: ' ';
    display: block;
    position: fixed;
    left: 0;
    top: -6.5rem;
    left: -.5rem;
    width: 20%;
    height: 20rem;
    /* height: 25%; */
    opacity: 100%;
    background-image: url('@/assets/images/hm-logo.png');
    background-repeat: no-repeat;
    background-position: 50% 0;
    background-size: cover;
    margin-left: 1%;
    margin-top: 1%;
    /* background-color: rgb(12, 21, 146); */
    }
}

@media (max-width: 1545px) {
    .hm-logo:before{
    content: ' ';
    display: block;
    position: fixed;
    left: 0;
    top: -7rem;
    left: -2rem;
    width: 25%;
    /* height: 25%; */
    height: 20rem;
    opacity: 100%;
    background-image: url('@/assets/images/hm-logo.png');
    background-repeat: no-repeat;
    background-position: 50% 0;
    background-size: cover;
    margin-left: 2rem;
    margin-top: 2%;
    /* background-color: brown; */
    }
}

@media (max-width: 1300px) {
    .hm-logo:before{
    content: ' ';
    display: block;
    position: fixed;
    left: 0;
    top: -7rem;
    left: -2rem;
    width: 25%;
    /* height: 18%; */
    height: 20rem;
    opacity: 100%;
    background-image: url('@/assets/images/hm-logo.png');
    background-repeat: no-repeat;
    background-position: 50% 0;
    background-size: cover;
    margin-left: 2rem;
    margin-top: 2%;
    /* background-color: brown; */
    }
}

/* RIGHT HERE IS WHERE I CHANGE FROM A TOP NAV TO A BOTTOM MOBILE NAV WITH HAMBURGER MENU */
@media (max-width: 1165px) {
    .hm-logo:before{
    content: ' ';
    display: block;
    position: fixed;
    left: 0;
    top: -5rem;
    left: -2rem;
    width: 25%;
    /* height: 18%; */
    height: 15rem;
    opacity: 100%;
    background-image: url('@/assets/images/hm-logo.png');
    background-repeat: no-repeat;
    background-position: 50% 0;
    background-size: cover;
    margin-left: 2rem;
    margin-top: 2%;
    /* background-color: brown; */
    }
}
</style>