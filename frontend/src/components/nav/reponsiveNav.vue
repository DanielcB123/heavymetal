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
            w-72
            -ml-4
            
          "
          >
          <p class="w-full -ml-0">{{current_user.company}}</p>
        </router-link>
        <!-- Mobile menu button -->

        <div class="sm:hidden w-20 py-2 h-20 border-2 rounded-full ml-16 z-10 hover:bg-slate-900 transition duration-200 ease-in-out">

                  <div class="w-24 mt-1 p-2 flex">
                    <div class="w-7 flex items-center justify-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#f8fafc" d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 
                          32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 
                          119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 
                          57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 
                          80S144 172.1 144 128C144 83.89 179.9 48 224 48z"
                        />
                      </svg>
                    </div>
                    <p class="pl-2 flex items-center justify-center text-lg text-white">DB</p>
                  </div>

        </div>
        <div id="nav-icon4" class="flex sm:hidden" @click="toggleNav();hamburger()">
            <span></span>
            <span></span>
            <span></span>
        </div>
      </div>

      <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
      <ul
        :class="showMenu ? 'sm:flex' : 'hidden'"
        class="
          md:flex 
        "
      >
        <li class="text-gray-100 hover:text-indigo-400 z-50 hover:cursor-pointer">
          <div class="w-28 flex mr-2">




          <ul class="w-36 flex">



        <li class="text-gray-100 hover:text-indigo-400 z-50 hover:cursor-pointer ">


          <ul class="w-36 flex ">



<!-- <RouterLink to="/new-client-sign-up" class="landing-headers"> -->
            <li  @click="testss()" class="hidden sm:block group -ml-14 relative dropdown text-white hover:text-purple-700 cursor-pointer font-bold text-base tracking-wide sm:rounded-md sm:border sm:border-white sm:bg-slate-300 sm:bg-opacity-40 hover:bg-cyan-500 hover:bg-opacity-30 transition duration-100 ease-in-out">
                  <div class="w-48 pl-2 flex rounded ">
                    <div class="w-4 flex items-center justify-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path fill="#f8fafc" d="M352 128c0 70.7-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0s128 57.3 128 128zM0 482.3C0 383.8 79.8 304
                         178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3
                          0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 
                          13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                      </svg>
                    </div>
                    <p class="pl-2 flex items-center justify-center pl-2 py-2 ">New Client Sign-up</p>
                  </div>
                  <!-- <div class="group-hover:block  absolute hidden h-auto w-16">
                    <ul class="top-0 w-28 bg-white shadow px-6 py-8 rounded-b-md">
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 2</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 3</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 4</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 5</a></li>
                    </ul>
                  </div> -->
              </li>
<!-- </RouterLink> -->
            
            <!-- ADDED hidden sm:block to make invisible when mobile but now need to make mobile buttons -->
            <!-- <li class=" hidden sm:block group -ml-16 relative dropdown text-white hover:text-purple-700 cursor-pointer font-bold text-base tracking-wide sm:rounded-md sm:border sm:border-slate-100 sm:bg-slate-300 sm:bg-opacity-40 hover:rounded-b-sm"> -->
            <li class="">









<!-- FIND CSS AWESOME SEARCH INPUT ON MY SAVED INSTAGRAM -->






                  <!-- <div class="w-48 p-2 flex rounded ">
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
                    <div class="group-hover:block absolute hidden h-auto">
                      <ul class="top-0 w-48 bg-white shadow px-6 py-2 rounded-b-md">
                        <li class="py-1">
                          <a class="block text-slate-500 font-bold text-base uppercase hover:text-slate-700 cursor-pointer">
                            <form id="googleSrch" action="https://google.com/search" method="get" target="_blank" autocomplete="off" onkeydown="return event.key != 'Enter';">
                              <input type="text" name="q" id="google-sch-input" placeholder="Google" class="search-input no-outline -ml-4 w-44 px-2 py-1 pb-2 border-b"/>
                            </form>

                          </a>
                        </li>
                        <li class="py-1">
                          <a class="block text-slate-500 text-base  hover:text-slate-700 cursor-pointer">
                            <input type="text" placeholder="HeavyMetal" class="search-input no-outline -ml-4 w-44 px-2 py-1 pb-2 border-b">



                          </a>
                        </li>
                        <li class="py-1">
                          <a class="block text-slate-500 text-base hover:text-slate-700 cursor-pointer flex justify-center w-100">
                            <input @click="submitGoogleSrch()" type="submit" form="googleSrch" id="google-search-button" class="w-full mt-2 mb-1 bg-blue-500 py-2.5 px-1 text-white rounded-l-md hover:bg-blue-600 animation duration-150 ease-in-out ">
                            <button type="button" id="hm-search-button" class="w-full mt-2 mb-1 bg-green-500 py-2.5 px-1 text-white rounded-r-md hover:bg-blue-600 animation duration-150 ease-in-out ">HM Search</button>


                          </a>
                        </li>
                      </ul>
                  </div> -->
                </li>
              </ul> 


        </li>

            <li class="hidden sm:block group relative dropdown text-white hover:text-purple-700 cursor-pointer font-bold text-base tracking-wide sm:rounded-md sm:border sm:border-white sm:bg-slate-300 sm:bg-opacity-40 hover:rounded-b-sm">
                  <div class="w-28 pl-2 flex rounded ">
                    <div class="w-4 flex items-center justify-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#f8fafc" d="M543.9 251.4c0-1.1 .1-2.2 .1-3.4c0-48.6-39.4-88-88-88l-40 0H320l-16 0 0 0v16 72c0 22.1-17.9 40-40 40s-40-17.9-40-40V128h.4c4-36 
                          34.5-64 71.6-64H408c2.8 0 5.6 .2 8.3 .5l40.1-40.1c21.9-21.9 57.3-21.9 79.2 0l78.1 78.1c21.9 21.9 21.9 57.3 0 79.2l-69.7 69.7zM192 128V248c0 39.8 32.2 72 
                          72 72s72-32.2 72-72V192h80l40 0c30.9 0 56 25.1 56 56c0 27.2-19.4 49.9-45.2 55c8.2 8.6 13.2 20.2 13.2 33c0 26.5-21.5 48-48 48h-2.7c1.8 5 2.7 10.4 2.7 16c0
                          26.5-21.5 48-48 48H224c-.9 0-1.8 0-2.7-.1l-37.7 37.7c-21.9 21.9-57.3 21.9-79.2 0L26.3 407.6c-21.9-21.9-21.9-57.3 0-79.2L96 258.7V224c0-53 43-96 96-96z"
                        />
                      </svg>
                    </div>
                    <p class="pl-2 flex items-center justify-center pl-2 py-2">Help</p>
                  </div>
                  <div class="group-hover:block absolute hidden h-auto w-16">
                    <ul class="top-0 w-28 bg-white shadow px-6 py-8 rounded-b-md">
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 2</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 3</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 4</a></li>
                        <li class="py-1"><a class="block text-purple-500 font-bold text-base uppercase hover:text-purple-700 cursor-pointer">Item 5</a></li>
                    </ul>
                  </div>
              </li>

              
          </ul>





          </div>
          
        </li>

        <li class="text-gray-100 hover:text-indigo-400 z-50 hover:cursor-pointer w-full flex ml-36">
          <ul class="w-full flex">
            <li class="hidden sm:block group  relative dropdown text-white hover:text-purple-700 cursor-pointer font-bold text-base tracking-wide sm:rounded-full sm:border-2 sm:border-slate-100 sm:bg-slate-800">
                  <div class="w-48 p-2 flex -mt-.5 ml-1">
                    <div class="w-5 flex items-center justify-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#f8fafc" d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 
                          32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 
                          119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 
                          57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 
                          80S144 172.1 144 128C144 83.89 179.9 48 224 48z"
                        />
                      </svg>
                    </div>






                    
                    <p class="pl-2 flex items-center justify-center text-xs">{{current_user.firstName}} {{current_user.lastName}}</p>
                  </div>
                  <div class="group-hover:block rounded-b absolute hidden h-auto ml-4 profile-dd">
                    <ul class="top-0 w-40 bg-slate-800 shadow px-0 pt-2">
                        <li v-if="current_user.admin" class="py-1">
                          <a class="block text-slate-400 font-bold text-base hover:text-slate-100 border-slate-800 py-2 px-2 w-full cursor-pointer">
                          
                            <div @click="open.new_employee_modal = true" class="text-white flex" to="login">
                              <p class="block text-slate-400 font-bold text-base hover:text-slate-100 hover:bg-slate-700 border-slate-800 w-full cursor-pointer">New Employee</p>
                            </div>

                            <Teleport to="body">
                              <div v-if="open.new_employee_modal" class="flex justify-center fixed z-50 bg-opacity-70 bg-neutral-900 p-5 text-blue-500 w-100 h-full">
                                <div class="h-2/3 sm:w-6/12 md:h-10/12 lg:w-4/12 m-auto rounded-lg bg-slate-100 p-3 bg-opacity-90">
                                  <form @submit.prevent="login" class="h-full align-center bg-opacity-90">
                                    
                                    <!-- <div class="w-full flex flex-col w-full h-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"> -->

  <!-- <form class="h-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"> -->
    <div class="mb-4 flex">
      <div>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="first_name">
          First Name
        </label>
        <input v-model="new_employee.firstName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="first_name" type="text" placeholder="First Name">
      </div>
      <div>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="last_name">
          Last Name
        </label>
        <input v-model="new_employee.lastName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="last_name" type="text" placeholder="Last Name">
      </div>

    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input v-model="new_employee.email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email">
    </div>

    <div class="mb-6 ">
      <div class="">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input v-model="new_employee.password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="">
      </div>
      <div class="">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password_c">
          Confirm Password
        </label>
        <input v-model="new_employee.c_password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password_c" type="password" placeholder="">
      </div>
      <div class="flex justify-between">
        <div class="flex">
          <label class="block text-gray-700 text-sm font-bold mb-2 pr-2" for="personal_trainer">
            Personal Trainer
          </label>
          <input v-model="new_employee.personal_trainer" class="mb-2" id="personal_trainer" type="checkbox" value="true">
        </div>

        <div class="flex mr-36">
          <label class="block text-gray-700 text-sm font-bold mb-2 pr-2" for="personal_trainer">
            Admin
          </label>
          <input v-model="new_employee.admin" class="mb-2" id="personal_trainer" type="checkbox" value="true">
        </div>

      </div>
    </div>

    
    <div class="p-10 mt-auto w-full flex justify-center p-2 mt-auto w-full">          
      <button @click="NewEmployeeRegister" type="button" class="w-1/3 rounded-md p-2 mb-2 bg-blue-500 hover:bg-blue-500 duration-100 text-white mr-5">Create User</button>
      <button @click="open.new_employee_modal = false ;" type="button" class="w-1/3 rounded-md p-2 mb-2 bg-gray-300 hover:bg-gray-500 duration-100 text-gray-600">Cancel</button>
    </div>

    <!-- <div class="flex flex-col p-5 w-full h-full bg-sky-200">  
        <div class="p-10 mt-auto w-full bg-amber-300">Bottom</div>
    </div> -->

  <!-- </form> -->


                                    <!-- </div> -->
                                  </form>
                                </div>
                              </div>
                            </Teleport>
                          
                          </a>
                        </li>
                        <li class="py-1"><a class="block text-slate-400 font-bold text-base hover:text-slate-100 hover:bg-slate-700 border-slate-800 py-2 px-2 w-full cursor-pointer">Item 2</a></li>
                        <li class="py-1"><a class="block text-slate-400 font-bold text-base hover:text-slate-100 hover:bg-slate-700 border-slate-800 py-2 px-2 w-full cursor-pointer">Item 3</a></li>
                        <li class="py-1"><a class="block text-slate-400 font-bold text-base hover:text-slate-100 hover:bg-slate-700 border-slate-800 py-2 px-2 w-full cursor-pointer">Item 4</a></li>
                        <li class="pt-1" @click="logout"><a class="block text-slate-400 font-bold text-base hover:text-slate-100 hover:bg-slate-700 border-slate-800 py-2 px-2 w-full cursor-pointer">Logout</a></li>
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
import { computed, onMounted, onUnmounted, ref, defineEmits, reactive, defineProps} from "vue"
import router from '../../router/index';
import axios from 'axios'

const emit = defineEmits(['openNewClientSignUp']);

const props = defineProps({
  token: {
    type: String,
    default: '',
  }
})

let open = reactive({
    new_employee_modal:false,
    admin_access:false,
});

let new_employee = reactive({
    personal_trainer:false,
    firstName: '',
    lastName: '',
    email: '',
    password:'',
    c_password:'',
    companyName:'',
    companyID:'',
    admin:false,
});

let current_user = reactive({
    firstName: '',
    lastName: '',
    admin:false,
    company:'',
});



onMounted(() => {
setTimeout(function() {
    const token = localStorage.getItem("token");


    // const token = localStorage.getItem("token");
    console.log('prop: '+token);
    //  Daniel 12/16/22 use props to pass to child components the token as to get the user so I can get the user auth and user companyID to display to proper data
    //  Create Controller function in laravel to get the user row from the datatable with the token to get the companyID and user auth(admin & personal trainer)
    axios.get('http://localhost:8000/api/get-user', { params: { token: token } }).then(res => {
      

        if(res){
            current_user.firstName  = res.data[0].firstName;
            current_user.lastName   = res.data[0].lastName;
            current_user.admin      = res.data[0].admin;
            current_user.company    = res.data[0].companyName;
            new_employee.companyID  = res.data[0].companyID;
            new_employee.companyName  = res.data[0].companyName;

            // router.push('landing')
        }else{
            console.log('err')
            error.value = res.data.message;
        }
        

    });
    }, 350);
})



const NewEmployeeRegister = async() => {
 
  console.log(new_employee);
  open.new_employee_modal=false;
    await axios.post('http://localhost:8000/api/client/register', new_employee).then(res => {
      
        if(res.data.success){
            console.log('succ')
            localStorage.setItem('token',res.data.data.token)
            // router.push('landing')
        }else{
            console.log('err')
            error.value = res.data.message;
        }
        
    });
    
}


    function testss(){
      // console.log('blaw');
      emit('openNewClientSignUp')
    }

    function emptyInput(){
       document.getElementById('google-sch-input').value = '';
      
    }


    function submitGoogleSrch(){
      setTimeout(emptyInput,1000);
    }


    function hamburger(){
        document.getElementById('nav-icon4').classList.toggle('open');
    }
    
    function openNewClientSignup(){
      
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
  font-size: 3rem;
  left: 0rem;
  /* font-family: 'Orbitron', sans-serif; */
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

.search-input {
  border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
  border-bottom-style: groove;
  background-color: rgb(255, 255, 255);
}

.no-outline:focus {
  outline: none;
}

.profile-dd{
  margin-top: .15rem;
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

.mobile-visibility-nav-options{
visibility: hidden;
}

@media screen and (max-width: 650px){
  .mobile-visibility-nav-options{
    visibility: hidden;
  }
}

@media screen and (max-width: 1024px){
  .logo{
    font-size: 1.5rem;
  }
}


</style>


