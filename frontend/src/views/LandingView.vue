<script setup>
import TheLanding from '@/components/landing/TheLanding.vue'
import DynamicLanding from './../components/dynamiclanding/DynamicLanding.vue'
import CheckInComp  from './../components/checkin/checkInComp.vue'
import NavBar from './../components/nav/DesktopNav.vue'
import {ref} from 'vue';



// import WelcomeItem from './WelcomeItem.vue'
import WelcomeItem from '../components/landing/WelcomeItem.vue'
import CheckInBtn from '../components/landing/buttons/CheckInBtn.vue'
import ClientSearchBtn from '../components/landing/buttons/ClientSearchBtn.vue'
import PersonalTrainingBtn from '../components/landing/buttons/PersonalTrainingBtn.vue'
import ClassesBtn from '../components/landing/buttons/ClassesBtn.vue'
import StoreBtn from '../components/landing/buttons/StoreBtn.vue'
import AdminBtn from '../components/landing/buttons/AdminBtn.vue'




const isOpened = ref(false);





</script>

<template>
  <main>
    <div class="nav">
      
      <NavBar />
    </div>

    <div class="out">
      <div class="row">
        <div class="column left" style="">
          <!-- <TheLanding /> -->










  <div id="landing">
    
    <div class="sidemenu">
      <WelcomeItem>
          <template #icon>
              <!-- <CheckInBtn /> -->
              <div @click="activeTab = 'CheckInComp'">
              <div class="landing-btn cust-alignment">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" fill="currentColor">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                      <path d="M274.7 304H173.3C77.61 304 0 381.6 0 477.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM632.3 134.4c-9.703-9-24.91-8.453-33.92 1.266l-87.05 93.75l-38.39-38.39c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l56 56C499.5 285.5 505.6 288 512 288h.4375c6.531-.125 12.72-2.891 17.16-7.672l104-112C642.6 158.6 642 143.4 632.3 134.4z"/>
                    </svg>
                  </svg>
                </div>
              </div>
          </template>

        
        <template #heading>
          <RouterLink to="/checkin" class="landing-headers">Check In</RouterLink>
        </template>
        

        Use for checking clients in, customer sign up and service, 
        <a target="_blank" href="https://vuejs.org/">check in</a>
        provides you with all information you need to get started.
      </WelcomeItem>

      <WelcomeItem>
        <template #icon>
          <!-- <ClientSearchBtn /> -->
            <div @click="activeTab = 'DynamicLanding'">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                  <path d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z"/>
                </svg>
              </svg>
            </div>
        </template>
        <template #heading>
          
          <!-- Client Search -->
          <RouterLink to="/client-search" class="landing-headers">Client Search</RouterLink>
        </template>
        

        This project is served and bundled with
        <a href="https://vitejs.dev/guide/features.html" target="_blank">Vite</a>. The recommended IDE
        setup is <a href="https://code.visualstudio.com/" target="_blank">VSCode</a> +
        <a href="https://github.com/johnsoncodehk/volar" target="_blank">Volar</a>. If you need to test
        your components and web pages, check out
        <a href="https://www.cypress.io/" target="_blank">Cypress</a> and
        <a href="https://on.cypress.io/component" target="_blank"
          >Cypress Component Testing</a
        >.

        <br />

        More instructions are available in <code>README.md</code>.
      </WelcomeItem>

      <WelcomeItem>
        <template #icon>
          <PersonalTrainingBtn />
        </template>
        <template #heading>
          <RouterLink to="/personal-training" class="landing-headers">Personal Training</RouterLink>
        </template>

        Get official tools and libraries for your project:
        <a target="_blank" href="https://pinia.vuejs.org/">Pinia</a>,
        <a target="_blank" href="https://router.vuejs.org/">Vue Router</a>,
        <a target="_blank" href="https://test-utils.vuejs.org/">Vue Test Utils</a>, and
        <a target="_blank" href="https://github.com/vuejs/devtools">Vue Dev Tools</a>. If you need more
        resources, we suggest paying
        <a target="_blank" href="https://github.com/vuejs/awesome-vue">Awesome Vue</a>
        a visit.
      </WelcomeItem>

      <WelcomeItem>
        <template #icon>
          <ClassesBtn />
        </template>
        <template #heading>
          <RouterLink to="/classes" class="landing-headers">Classes</RouterLink>
        </template>

        Got stuck? Ask your question on
        <a target="_blank" href="https://chat.vuejs.org">Vue Land</a>, our official Discord server, or
        <a target="_blank" href="https://stackoverflow.com/questions/tagged/vue.js">StackOverflow</a>.
        You should also subscribe to
        <a target="_blank" href="https://news.vuejs.org">our mailing list</a> and follow the official
        <a target="_blank" href="https://twitter.com/vuejs">@vuejs</a>
        twitter account for latest news in the Vue world.
      </WelcomeItem>

      <WelcomeItem>
        <template #icon>
          <StoreBtn />
        </template>
        <template #heading>
          <RouterLink to="/store" class="landing-headers">Store</RouterLink>
        </template>

        As an independent project, Vue relies on community backing for its sustainability. You can help
        us by
        <a target="_blank" href="https://vuejs.org/sponsor/">becoming a sponsor</a>.
      </WelcomeItem>



      <WelcomeItem>
        <template #icon>
          <!-- <AdminBtn/> -->
              <!-- <CheckInBtn /> -->
              <div @click="activeTab = 'CheckInComp'">
              <div class="landing-btn cust-alignment calendar-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" fill="currentColor">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM64 304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304zM192 304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304zM336 256C327.2 256 320 263.2 320 272V304C320 312.8 327.2 320 336 320H368C376.8 320 384 312.8 384 304V272C384 263.2 376.8 256 368 256H336zM64 432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V400C128 391.2 120.8 384 112 384H80C71.16 384 64 391.2 64 400V432zM208 384C199.2 384 192 391.2 192 400V432C192 440.8 199.2 448 208 448H240C248.8 448 256 440.8 256 432V400C256 391.2 248.8 384 240 384H208zM320 432C320 440.8 327.2 448 336 448H368C376.8 448 384 440.8 384 432V400C384 391.2 376.8 384 368 384H336C327.2 384 320 391.2 320 400V432z"/>
                    </svg>
                  </svg>
                </div>
              </div>



        </template>
        <template #heading>
          <RouterLink to="/admin" class="landing-headers">Calendar</RouterLink>
        </template>

        As an independent project, Vue relies on community backing for its sustainability. You can help
        us by
        <a target="_blank" href="https://vuejs.org/sponsor/">becoming a sponsor</a>.
      </WelcomeItem>




      <WelcomeItem>
        <template #icon>
          <AdminBtn/>
        </template>
        <template #heading>
          <RouterLink to="/admin" class="landing-headers">Admin</RouterLink>
        </template>

        As an independent project, Vue relies on community backing for its sustainability. You can help
        us by
        <a target="_blank" href="https://vuejs.org/sponsor/">becoming a sponsor</a>.
      </WelcomeItem>
    </div>
    <h1 class="company_name">Heavy Metal&copy;</h1>
  </div>











        </div>
        <!-- <button @click="activeTab = 'CheckInComp'">Check In</button>
        
        <button @click="activeTab = 'DynamicLanding'">Dynamic</button> -->

        <div class="column right" style="">
          <DynamicLanding v-if="activeTab === 'DynamicLanding'"/>
          <CheckInComp v-if="activeTab === 'CheckInComp'"/>
        </div>
              <button type="button" class="btn btn-dark mt-2 z-20" style="margin-left: " @click="logout">Logout</button>

      </div>
    </div>


    
  </main>
</template>

<script>
// import { useRouter } from "vue-router"
// import { useRouter } from 'vue-router';
// import { useRouter } from 'vue-router';
// const router = useRouter();
import router from '../router/index';

export default {
  name: 'Landing',
  components: {
    NavBar,
    DynamicLanding,
    CheckInComp

  },
  data(){
    return{
      activeTab: CheckInComp
    }
  },
  methods: {
    
    logout(){
      
      console.log('here');
      localStorage.removeItem('token');
      router.push({name: 'login'})
    }
  }
}
</script>


<style scoped>
.out{
  /* scroll-behavior: smooth; */
}
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
  height: 85vh;
  margin-left: -2%;
  padding-left: 0%;
  display: flex;
      /* -ms-overflow-style: none; */
    /* scrollbar-width: none; */
    /* overflow-y: auto; */
  /* flex-wrap: wrap; */
  /* justify-content: flex-end; */
  width: 44%;
  /* flex: 30%; */
  /* background-color: rgba(0, 0, 255, 0.432); */
}
  /* .left::-webkit-scrollbar { */
    /* display: none;  */
  /* } */

.right {
  /* flex: 50%; */
  height: 85vh;
  width:56%;
  overflow-y: scroll;
  /* background-color: rgba(255, 0, 106, 0.432); */
  -ms-overflow-style: none;
  scrollbar-width: none;
   overflow-y: auto; 
 
}
.right::-webkit-scrollbar {
  display: none; /* for Chrome, Safari, and Opera */
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
  height: 6.5rem;
  width: 99.1vw;
  z-index: 5;
  /* position: fixed; */
  display: flex;
  flex: wrap;
}


@media screen and (min-width: 500px) {
  .nav {
    /* background-color: lightgreen; */
  }
}

@media screen and (min-width: 2200px) {
  .nav {
    background-color: lavender;
    width: 99.5vw;
  }
}

/* =====================================for sidebar=================================== */
  #landing{
    /* height: 90vh; */
    width: 100%;
    margin-left: 7%;
    padding-top: 30%;
    -ms-overflow-style: none;
    scrollbar-width: none;
    overflow-y: auto;
    scroll-behavior: smooth;
    /* overflow-y: auto; */
    /* background-color: blueviolet; */
  }
  #landing::-webkit-scrollbar {
    display: none; 
  }

  .company_name{
    position: relative;
    margin-top: 1rem;
    left: rem;
    bottom: 1rem;
    color: rgba(210, 219, 219, 0.075);
    /* height: 8rem; */
    font-size: .7rem;

    /* margin-bottom: 3rem; */
  }
  .sidemenu{
    
    box-sizing: border-box;
    margin-top: -25%;
    /* margin-left: -50%; */
    padding-left: 4rem;
    /* scroll-behavior: smooth; */
  }

  .cust-alignment{
    padding-top: 0.1em;
    padding-left: .2em;
  }

  .calendar-btn{
    margin-right: .2rem;
    margin-bottom: .2rem;
  }
  /* =====================================for sidebar=================================== */

</style>