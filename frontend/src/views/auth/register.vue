

<template>
    <div class="w-screen h-full bg-blue-900 flex flex-wrap justify-center items-center big-container reg-header">
        <div class="w-full h-20 mt-2">
            <ul class="h-full flex justify-center items-center pl-12">
                <li id="bar1" @mouseover="changeColor1()" class="bis2 z-50 bis bg-neutral-300 py-1 w-1/5  -ml-7 flex justify-center">Personal Info</li>         

                <li id="bar2" @mouseover="changeColor2()" class="bis2 z-40  bg-neutral-300 py-1 w-1/5  -ml-16 flex justify-center">Business Info</li>

                <li id="bar3" @mouseover="changeColor3()" class="bis2 z-30 bg-neutral-300 py-1 w-1/5  border-black -ml-16 flex justify-center">Payment</li>


                <li id="bar4" @mouseover="changeColor4()" class="bis2 z-20 bg-neutral-300 py-1 w-1/5  border-black -ml-16 flex justify-center">Confirmation</li>

                <li id="bar5" @mouseover="changeColor5()" class="bis2 z-10 bg-neutral-300 py-1 w-1/5  border-black -ml-16 flex justify-center">Tutorial</li>

            </ul>
        </div>
      <a class="flex justify-start w-full text-center no-underline -mt-6 ml-2 text-xs text-gray-400 hover:text-gray-100" href="/start">Already have an account?</a>
        <div class="w-screen h-full mt-2 flex flex-wrap justify-center bg-slate-200">


    <!-- <h1 @mouseover="openPersonalInfo" class="h-16 py-3 px-5 bg-blue-400">here</h1> -->


	<div class="w-full flex justify-center">
        <!-- <h1 class="bg-blue-600">test</h1> -->
        <transition name="fade" mode="out-in">
            <PersonalInfo @next="changeColor2('personal-next');"  v-if="activeTab === 'PersonalInfo'"/>
        </transition>
        <transition name="fade" mode="out-in">
            <BusinessInfo @next="changeColor3('business-next');" v-if="activeTab === 'BusinessInfo'"/>
        </transition>
        <transition @next="changeColor4('payment-next');" name="fade" mode="out-in">
            <Payment v-if="activeTab === 'Payment'"/>
        </transition>
        <transition @next="changeColor5('confirmation-next');" name="fade" mode="out-in">
            <Confirmation v-if="activeTab === 'Confirmation'"/>
        </transition>
        <transition name="fade" mode="out-in">
            <Tutorial v-if="activeTab === 'Tutorial'"/>
        </transition>
	</div>

        </div>



        
    </div>
</template>






<script setup>
import { RouterLink } from 'vue-router'
import { reactive, ref, onMounted } from 'vue';
import  router  from '../../router';
import axios from 'axios';
import PersonalInfo from '../../components/register/personalInfo.vue'
import BusinessInfo from '../../components/register/businessInfo.vue'
import Payment from '../../components/register/getPayment.vue'
import Confirmation from '../../components/register/registerConfirmation.vue'
import Tutorial from '../../components/register/tutorial.vue'

const activeTab = ref('');

let form = reactive({
    firstName: '',
    lastName: '',
    email: '',
    password: '',
    c_password:'',
});
let error = ref('');

let progress = reactive({
    personal_flag: false,
    business_flag: false,
    payment_flag: false,
    confirmation_flag: false,
    tutorial_flag:false,
});


onMounted(() => {
//   activeTab.value = 'PersonalInfo';
openPersonalInfo();
changeColor1('in');
  console.log('activeTab');
})




const register = async() => {
    await axios.post('http://localhost:8000/api/client/register', form).then(res => {
        if(res.data.success){
            // const useRouter = router();
            console.log('succ')
            localStorage.setItem('token',res.data.data.token)
            router.push('landing')
        }else{
            console.log('err')
            error.value = res.data.message;

        }
    });
}

function changeColor1(dir){
    console.log("ok");
    
    if(activeTab.value == 'PersonalInfo'){
        document.getElementById("bar1").classList.remove('bis2');
        document.getElementById("bar1").classList.add('arrow-personal-color');
        // document.getElementById('bar1').classList.add('border-2');
        // document.getElementById('bar1').classList.add('border-white');
          
    }
    // if(dir == 'out'){
    //     document.getElementById("bar1").style.background = '#a1d5f7';
    // }
    // document.getElementById('bar1').classList.toggle('#0a4b76');
}

// is getting emit 
function changeColor2(dir){
    if(progress.business_flag){
        openBusinessInfo();
    }
    if(dir == 'personal-next'){
        console.log(activeTab.value);
        // activeTab = 'BusinessInfo';
        if(activeTab.value == 'PersonalInfo'){
            document.getElementById("bar2").classList.remove('bis2');
            document.getElementById("bar2").classList.add('bis');
            // document.getElementById("bar2").classList.add('arrow-personal-color');
            // document.getElementById('bar2').classList.add('border-2');
            // document.getElementById('bar2').classList.add('border-white');
            activeTab.value = 'BusinessInfo';
            console.log('here-->'+activeTab.value);
        }
        openBusinessInfo();
    }
    // use emit from personal info next button to enable progress.personalinfo_flag true then if true can change color
}

function changeColor3(dir){
    if(progress.payment_flag){
        openPaymentInfo();
    }
    if(dir == 'business-next'){
        console.log(activeTab.value);
        // activeTab = 'BusinessInfo';
        if(activeTab.value == 'BusinessInfo'){
            document.getElementById("bar3").classList.remove('bis2');
            document.getElementById("bar3").classList.add('bis');
            // document.getElementById("bar2").classList.add('arrow-personal-color');
            // document.getElementById('bar2').classList.add('border-2');
            // document.getElementById('bar2').classList.add('border-white');
            activeTab.value = 'PaymentInfo';
            console.log('here-->'+activeTab.value);
        }
        openPaymentInfo();
    }
    // use emit from personal info next button to enable progress.personalinfo_flag true then if true can change color
}

function changeColor4(dir){
    if(progress.confirmation_flag){
        openConfirmation();
    }
    if(dir == 'payment-next'){
        console.log(activeTab.value);
        // activeTab = 'BusinessInfo';
        if(activeTab.value == 'Payment'){
            document.getElementById("bar4").classList.remove('bis2');
            document.getElementById("bar4").classList.add('bis');
            // document.getElementById("bar2").classList.add('arrow-personal-color');
            // document.getElementById('bar2').classList.add('border-2');
            // document.getElementById('bar2').classList.add('border-white');
            activeTab.value = 'Confirmation';
            console.log('here-->'+activeTab.value);
        }
        openConfirmation();
    }
    // use emit from personal info next button to enable progress.personalinfo_flag true then if true can change color
}

function changeColor5(dir){
    if(progress.tutorial_flag){
        openTutorial();
    }
    if(dir == 'confirmation-next'){
        console.log(activeTab.value);
        // activeTab = 'BusinessInfo';
        if(activeTab.value == 'Confirmation'){
            document.getElementById("bar5").classList.remove('bis2');
            document.getElementById("bar5").classList.add('bis');
            // document.getElementById("bar2").classList.add('arrow-personal-color');
            // document.getElementById('bar2').classList.add('border-2');
            // document.getElementById('bar2').classList.add('border-white');
            activeTab.value = 'Tutorial';
            console.log('here-->'+activeTab.value);
        }
        openTutorial();
    }
    // use emit from personal info next button to enable progress.personalinfo_flag true then if true can change color
}

function changeColorArrow1(){
    // document.getElementById('bar1').classList.toggle('bg-red-600');
}
function openPersonalInfo(){
    progress.personal_flag == true;
    activeTab.value = 'PersonalInfo';
}

function openBusinessInfo(){
    progress.business_flag = true;
    activeTab.value = 'BusinessInfo';
}

function openPaymentInfo(){
    progress.payment_flag = true;
    activeTab.value = 'Payment';
}

function openConfirmation(){
    progress.confirmation_flag = true;
    activeTab.value = 'Confirmation';
}

function openTutorial(){
    progress.tutorial_flag = true;
    activeTab.value = 'Tutorial';
}
</script>

<style scoped>

.reg-header{
   /* background-image: linear-gradient(to right top, #051937, #004062, #006b82, #006663, #003941);  */
background-image: linear-gradient(to right bottom, #173561, #233452, #435166, #67707b, #8e8f90);}
.arrow{
    clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
}
.arrow-personal-color{
background: rgb(29,143,214);
background: linear-gradient(90deg, rgba(29,143,214,1) 0%, rgba(26,167,235,1) 85%, rgba(231,239,242,1) 100%);
/* background: linear-gradient(90deg, rgba(29,143,214,1) 0%, rgba(26,167,235,1) 85%, rgba(231,239,242,1) 100%); */
}
/* .fade-enter-active,
.fade-leave-active {
    transition: opacity .5s;
    background-color: rgb(243, 104, 24);
}
.fade-enter,
.fade-leave-to {
    opacity: 0;
} */



.fade-enter-active{
    transition: all 1s ease-in-out;
    animation: bounce-in 1.15s ease 0s 1 normal forwards;
}
.fade-leave-active {
  visibility: hidden;
}

.fade-enter-from {
  opacity: 0;
  /* transform: translateY(30px); */
}

.fade-leave-to {
  opacity: 0;
  /* transform: translateY(-30px); */
}
@keyframes bounce-in {
	0% {
		animation-timing-function: ease-in;
		opacity: 1;
		transform: translateY(-45px);
	}

	24% {
		opacity: 1;
	}

	40% {
		animation-timing-function: ease-in;
		transform: translateY(-24px);
	}

	65% {
		animation-timing-function: ease-in;
		transform: translateY(-12px);
	}

	82% {
		animation-timing-function: ease-in;
		transform: translateY(-6px);
	}

	93% {
		animation-timing-function: ease-in;
		transform: translateY(-4px);
	}

	25%,
	55%,
	75%,
	87% {
		animation-timing-function: ease-out;
		transform: translateY(0px);
	}

	100% {
		animation-timing-function: ease-out;
		opacity: 1;
		transform: translateY(0px);
	}
}


.bis {
    color: white;
    background: 
        linear-gradient(to top, white, white) no-repeat
        /* border-left*/,
        linear-gradient(to left, transparent 1.45em, white 1.45em) no-repeat
        /* border-top */,
        linear-gradient(to left, transparent 1.45em, white 1.45em) no-repeat bottom
        /* border-bottom */, 
        linear-gradient(-45deg, transparent 1em, white 1em, white 1.1em, #00A2E8 1em) bottom,
        /*border top righ and background  +bg-size to cover half bottom */
    linear-gradient(-135deg, transparent 1em, white 1em, white 1.1em, #25B1ED 1em) top
    /* border-bottom right and background +different color for the show.  +bg-size to cover half bottom */
    /* rgba(0, 0, 0, 0.00) */
    /* see where the box lays */
    ;
    background-repeat: no-repeat;
    /* no-repeat please */
    background-size: 0.08em 100%, 100% 0.075em, 100% 0.075em, 100% 50.9%, 100% 50.9%;
    /* spray each image/gradient only where shapes has to be drawn */

}

.bis2 {
    height: 1.91rem;
    color: black;
    background: 
        linear-gradient(to top, white, white) no-repeat
        /* border-left*/,
        linear-gradient(to left, transparent 1.45em, white 1.45em) no-repeat
        /* border-top */,
        linear-gradient(to left, transparent 1.45em, white 1.45em) no-repeat bottom
        /* border-bottom */, 
        linear-gradient(-45deg, transparent 1em, #435166 1em, #435166 1.1em, #d4d4d4 1em) bottom,
        /*border top righ and background  +bg-size to cover half bottom */
    linear-gradient(-135deg, transparent 1em, #435166 1em, #435166 1.1em, #d4d4d4 1em) top
    /* border-bottom right and background +different color for the show.  +bg-size to cover half bottom */
    /* rgba(0, 0, 0, 0.00) */
    /* see where the box lays */
    ;
    background-repeat: no-repeat;
    /* no-repeat please */
    background-size: 0.08em 100%, 100% 0.075em, 100% 0.075em, 100% 50.9%, 100% 50.9%;
    /* spray each image/gradient only where shapes has to be drawn */

}
</style>