
<template>


  <div class="w-screen h-screen flex start-background-animation">

    <div class="mt-12 h-1/6 w-100 fixed flex justify-center text-4xl md:text-6xl">
        <h3 class="animate-charcter"> HEAVY METAL</h3>
    </div>
      


    <div class="w-5/6 sm:w-1/3 sm:h-5/12 m-auto rounded-sm bg-slate-400 p-3 ">
        <form @submit.prevent="login" class="align-center bg-slate-300">
            <h3 class="flex justify-center bg-slate-300 p-2 text-white text-2xl">Login</h3>

            <div class="grid place-items-center">
                <p v-if="error" style="color:red">{{error}}</p>
                <input type="email" placeholder="Email" id="email" v-model="form.email" class="w-3/4 rounded-sm py-2 px-3"><br/>
                <input type="password" placeholder="Password" id="password" v-model="form.password" class="w-3/4 rounded-sm py-2 px-3"><br/>
            </div>

            <div class="w-full flex justify-center bg-slate-300">
                <button type="submit" class="w-1/5 rounded-md p-2 mb-2 bg-blue-400 hover:bg-blue-500 duration-100 text-white">Login</button>
            </div>
            

        </form>
        <RouterLink class="text-white" to="register">Register</RouterLink>
    </div>
  </div>

</template>



<script>
import { RouterLink } from 'vue-router'
import { reactive, ref } from 'vue';
import  router  from '../../router';
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

<style scoped>
.start-background-animation{
 	background: linear-gradient(-45deg, #200909, #10303d, #161d33, #102242);

	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	/* height: 100vh;  */
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




.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #0d0c3a2f 0%,
    #1e2c429a 29%,
    #192b42d2 67%,
    #1b0e3d3f 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
  /* font-size: 90px; */
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}

</style>
