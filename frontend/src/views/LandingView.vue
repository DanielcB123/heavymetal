<script>
import ClientSearch from '../components/clientSearch/clientSearchComp.vue'
import CheckInComp  from './../components/checkin/checkInComp.vue'
// import NavBar from './../components/nav/DesktopNav.vue'
import NavBar from './../components/nav/reponsiveNav.vue'
import {ref} from 'vue';



// import WelcomeItem from './WelcomeItem.vue'
import WelcomeItem from '../components/sideBar/sideBarItem.vue'
import CheckInBtn from '../components/sideBar/buttons/CheckInBtn.vue'
import ClientSearchBtn from '../components/sideBar/buttons/ClientSearchBtn.vue'
import PersonalTrainingBtn from '../components/sideBar/buttons/PersonalTrainingBtn.vue'
import ClassesBtn from '../components/sideBar/buttons/ClassesBtn.vue'
import StoreBtn from '../components/sideBar/buttons/StoreBtn.vue'
import AdminBtn from '../components/sideBar/buttons/AdminBtn.vue'




const isOpened = ref(false);
const showModal = ref(false);
const open = ref(false);



</script>

<template>
  <main>
    <div class="">
      
      <NavBar />
    </div>

    <div class="out">
      <div class="row">
        <div class="column left" style="">
          <!-- <TheLanding /> -->


  <div id="landing">
   
    <!-- <div v-if="!isMobile()" class="sidemenu"> -->
      <div class="sidemenu">

<!-- <button @click="open = true">Open Modal</button> -->

<!-- <Teleport to=".modals-target"> -->
  <Teleport to="body">




  <div v-if="open" class="flex justify-center fixed z-50 bg-opacity-70 bg-neutral-900 p-5 text-blue-500 w-100 h-full -mt-7">
    <div class="w-1/3 h-1/3 bg-gradient-to-tr from-neutral-700 to-neutral-800 opacity-90 my-auto rounded-sm p-1.5">
    <!-- <img src="@/assets/images/dumbells1.jpg"/> -->
      <div class="bg-gradient-to-tr from-neutral-600 to-neutral-700 bg-opacity-100 px-2 pb-5 pt-3 h-full dumbells1"> 
        <div class="w-full mb-4 md:mr-2 md:mb-0 dumbells1-position">
            <label class="flex justify-center block mb-2 text-sm font-bold text-gray-100 text-xl pb-4" for="firstName">
              Client Search {{ "   " + type + ": " + width }}
            </label>

            <div class="-mt-5">
              <label for="" class="flex justify-end text-white pr-16">Search By</label>

              <div class="flex flex-wrap justify-center">
                                  <input
                class="w-7/12 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                id="firstName"
                type="text"
                placeholder="First Name"
              />

              <select id="countries" class="mx-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="US">Last Name</option>
                <option value="CA">Phone Number</option>
                <option value="FR">Street Address</option>
                <option value="DE">Client Number</option>
              </select>
              </div>
            </div>
          </div>

        <div class="flex justify-center">
            <button @click="clientSearch" class="bg-blue-500 rounded-md py-2 px-3 text-white mx-2">Search</button>
            <button @click="open = false;activeTab = 'ClientSearch'" class="bg-gray-500 rounded-md py-2 px-3 text-white mx-2">Close</button>
        </div>
        
      </div>
    </div>
  </div>

</Teleport>



      <WelcomeItem>
          <template #icon>
              <!-- <CheckInBtn /> -->
              <div @click="activeTab = 'CheckInComp'" class="">
              <div class="landing-btn cust-alignment mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" fill="currentColor" class="responsive-btn">
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
        
        <div class="hidden md:block">
          Use for checking clients in, customer sign up and service, 
          <a target="_blank" href="https://vuejs.org/">check in</a>
          provides you with all information you need to get started.
        </div>

        
      </WelcomeItem>

      <WelcomeItem>
        <template #icon>
            <!-- <div @click="activeTab = 'ClientSearch'" class="mb-1"> -->
            <div @click="open = true" class="mb-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="responsive-btn">
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
        
        <div class="hidden md:block">
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
        </div>

      </WelcomeItem>

      <WelcomeItem>
        <template #icon>
          <PersonalTrainingBtn />
        </template>
        <template #heading>
          <RouterLink to="/personal-training" class="landing-headers">Personal Training</RouterLink>
        </template>

        <div class="hidden md:block">
          Get official tools and libraries for your project:
          <a target="_blank" href="https://pinia.vuejs.org/">Pinia</a>,
          <a target="_blank" href="https://router.vuejs.org/">Vue Router</a>,
          <a target="_blank" href="https://test-utils.vuejs.org/">Vue Test Utils</a>, and
          <a target="_blank" href="https://github.com/vuejs/devtools">Vue Dev Tools</a>. If you need more
          resources, we suggest paying
          <a target="_blank" href="https://github.com/vuejs/awesome-vue">Awesome Vue</a>
          a visit.
        </div>

      </WelcomeItem>

      <WelcomeItem>
        <template #icon>
          <ClassesBtn />
        </template>
        <template #heading>
          <RouterLink to="/classes" class="landing-headers">Classes</RouterLink>
        </template>

        <div class="hidden md:block">
          Got stuck? Ask your question on
          <a target="_blank" href="https://chat.vuejs.org">Vue Land</a>, our official Discord server, or
          <a target="_blank" href="https://stackoverflow.com/questions/tagged/vue.js">StackOverflow</a>.
          You should also subscribe to
          <a target="_blank" href="https://news.vuejs.org">our mailing list</a> and follow the official
          <a target="_blank" href="https://twitter.com/vuejs">@vuejs</a>
          twitter account for latest news in the Vue world.
        </div>

      </WelcomeItem>

      <WelcomeItem>
        <template #icon>
          <StoreBtn />
        </template>
        <template #heading>
          <RouterLink to="/store" class="landing-headers">Store</RouterLink>
        </template>

        <div class="hidden md:block">
          As an independent project, Vue relies on community backing for its sustainability. You can help
          us by
          <a target="_blank" href="https://vuejs.org/sponsor/">becoming a sponsor</a>.
        </div>

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

        <div class="hidden md:block">
          As an independent project, Vue relies on community backing for its sustainability. You can help
          us by
          <a target="_blank" href="https://vuejs.org/sponsor/">becoming a sponsor</a>.
        </div>

      </WelcomeItem>




      <WelcomeItem>
        <template #icon>
          <AdminBtn/>
        </template>
        <template #heading>
          <RouterLink to="/admin" class="landing-headers">Admin</RouterLink>
        </template>

        <div class="hidden md:block">
          As an independent project, Vue relies on community backing for its sustainability. You can help
          us by
          <a target="_blank" href="https://vuejs.org/sponsor/">becoming a sponsor</a>.
        </div>
        
      </WelcomeItem>
    </div>
    <h1 class="company_name">Heavy Metal&copy;</h1>
  </div>











        </div>
        <!-- <button @click="activeTab = 'CheckInComp'">Check In</button>
        
        <button @click="activeTab = 'ClientSearch'">Dynamic</button> -->

        <div class="column right" style="">
          <ClientSearch v-if="activeTab === 'ClientSearch'"/>
          <CheckInComp v-if="activeTab === 'CheckInComp'"/>
        </div>
              <!-- <button type="button" class="btn btn-dark mt-2 z-20" style="margin-left: " @click="logout">Logout</button> -->

      </div>
    </div>


    
  </main>
</template>

<script setup>
import { computed, onMounted, onUnmounted, ref } from "vue"
import router from '../router/index';
const activeTab = ref('');
const showModal = ref(false);


// Ended here on 9/28/22. Last was trying to make responsive. Changes around 1025px wide. Looking into base.css & main.css
//
// Making media queries to make app responsive  **************************************************************************
function useBreakpoints() {
  let windowWidth = ref(window.innerWidth)

  const onWidthChange = () => windowWidth.value = window.innerWidth
  onMounted(() => window.addEventListener('resize', onWidthChange))
  onUnmounted(() => window.removeEventListener('resize', onWidthChange))

  const type = computed(() => {
    if (windowWidth.value < 550) return 'xs'
    if (windowWidth.value >= 550 && windowWidth.value < 1200) return 'md'
    if (windowWidth.value >= 1200) return 'lg'
    return null; // This is an unreachable line, simply to keep eslint happy.
  })

  const width = computed(() => windowWidth.value)

  return { width, type }
}

const { width, type } = useBreakpoints()

//************************************************************************************************************************* 












function clientSearch(){
  console.log(type + " " + width);
}

function isMobile() {
   if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
     return true
   } else {
     return false
   }
 }
    
function logout(){
  
  console.log('here');
  localStorage.removeItem('token');
  router.push({name: 'app'});
}


</script>


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

}

@media screen and (min-width: 2200px) {
  .nav {
    background-color: lavender;
    width: 99.5vw;
  }

}

/* =====================================for sidebar=================================== */
@media screen and (max-width: 2200px) {
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
}
@media screen and (max-width: 1024px) {
  #landing{
    width: 100%;
    margin-left: 3%;
    padding-top: 45%;
    -ms-overflow-style: none;
    scrollbar-width: none;
    overflow-y: auto;
    scroll-behavior: smooth;
  }
  #landing::-webkit-scrollbar {
    display: none; 
  }


}
@media screen and (max-width: 650px){
  .left {
  /* position: fixed; */
  /* background-color: blue; */
  padding-top: 5%;
  height: 85vh;
  margin-left: -2%;
  padding-left: 0%;
  display: flex;
      /* -ms-overflow-style: none; */
    /* scrollbar-width: none; */
    /* overflow-y: auto; */
  /* flex-wrap: wrap; */
  /* justify-content: flex-end; */
  width: 35%;
  /* flex: 30%; */
  /* background-color: rgba(0, 0, 255, 0.432); */
  }
  .landing-headers{
    visibility: hidden;
  }
  .responsive-btn{

    width: .9rem;
    /* color: blue; */
    /* font-size: 1rem;
    margin-left: 35%;
    width: 5rem; */
  }
}

.dumbells1{
position: relative;
}
.dumbells1:before{
  content: ' ';
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 5%;
  background-image: url('@/assets/images/dumbells1.jpg');
  background-repeat: no-repeat;
  background-position: 50% 0;
  background-size: cover;
}
.dumbells1-position{
  position: relative;
}
  /* =====================================for sidebar=================================== */

</style>