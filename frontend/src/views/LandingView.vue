<script setup>
import TheLanding from '@/components/landing/TheLanding.vue'
import DynamicLanding from './../components/dynamiclanding/DynamicLanding.vue'
import NavBar from './../components/nav/DesktopNav.vue'


</script>

<template>
  <main>

    <!-- commenting out to try to make responsive 8-21-22
    <div class="out">
      <div class="left"><TheLanding /></div>
     <div class="right"><DynamicLanding /></div>
    </div> -->
    <div class="nav">
      <NavBar />
    </div>

      <div class="row">
        <div class="column left" style="">
          <TheLanding />
        </div>
        <div class="column right" style="">
          <DynamicLanding />
        </div>
      </div>

<p id="signature">heavymetal</p>
    
  </main>
</template>


<style scoped>
#signature{
  position: absolute;
  height: 0vh;
    bottom: 0;
    width: 100%;
  padding-left: 1rem;
  padding-bottom: 0rem;
  margin-bottom: 0%;
}
.column {
  float: left;
  padding: 0px;
  height: 100vh; /* Should be removed. Only for demonstration */
  margin-left: 0rem;
}

.left {
  /* position: fixed; */
  height: 100vh;
  padding-left: 2%;
  display: flex;
  /* flex-wrap: wrap; */
  /* justify-content: flex-end; */
  width: 35%;
  /* flex: 30%; */
  /* background-color: rgba(0, 0, 255, 0.432); */
}

.right {
  /* flex: 50%; */
  width: 65%;
  overflow-y: scroll;
  /* background-color: rgba(255, 0, 106, 0.432); */
}

/* Clear floats after the columns */
.row:after {
  width: 95vw;
  content: "";
  display: table;
  clear: both;
}
.nav{
  background-color: aliceblue;
  height: 7%;
  width: 99.1vw;
  z-index: 5;
}


@media screen and (min-width: 500px) {
  .nav {
    background-color: lightgreen;
  }
}

@media screen and (min-width: 2200px) {
  .nav {
    background-color: lavender;
    width: 99.5vw;
  }
}

/* ================================================================================= */
/* .column {
  float: left;
  width: 50%;
  height: 100vh;
  margin-left: 0rem;
  padding-left: 10%;
  padding-right: ;
}

.row:after {
  width: 100vw;
  content: "";
  display: table;
  clear: both;
} */

/* ===================================================================================== */

/* .column {
  float: left;
  display: flex;
 
  background-color: white;
}

.left {
  width: 35%;
  height: 100vh;
}

.right {
  width: 65%;
  height: 100vh;
}

.row:after {
  content: "";
  display: table;
  clear: both;
  
} */
  /* ===================================================================================== */
  /* commenting out to try to make responsive 8-21-22
  .out{
    display: flex;
    justify-content: space-between;
  }
  .left{
      flex: 50%;
  padding: 10px;

    margin-left: -2rem;
    width: 100%;
    margin-top: -1rem;
    background-color: rgba(26, 74, 179, 0.445);
  }
  .right{
    

    margin-right: -49rem;
    background-color: rgba(39, 39, 39, 0.336);
    background-color: rgba(201, 37, 31, 0.459);
    height: 62rem;
    width: 177%;
  } */

</style>