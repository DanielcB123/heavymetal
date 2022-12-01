

<template>
    <div class="w-screen h-full bg-blue-900 flex flex-wrap justify-center items-center big-container reg-header">

        <div class="sm:hidden w-screen flex justify-center h-20 mt-2 bg-slate-300 pl-1">
           <div id="mobile-bar1" @mouseover="changeColor1()" class="bg-blue-500 w-3/12 h-12 bis-mobile-before z-50 text-xs"><p class="mobile-arrow-text">Personal</p></div>
           <div id="mobile-bar2" @mouseover="changeColor2()" class="bg-blue-500 w-3/12 h-12 bis-mobile-before z-40 text-xs -ml-5"><p class="mobile-arrow-text">Business</p></div>
           <div id="mobile-bar3" @mouseover="changeColor3()" class="bg-blue-500 w-3/12 h-12 bis-mobile-before z-30 text-xs -ml-5"><p class="mobile-arrow-text">Payment</p></div>
           <div id="mobile-bar4" @mouseover="changeColor4()" class="bg-blue-500 w-3/12 h-12 bis-mobile-before z-20 text-xs -ml-5"><p class="mobile-arrow-text">Confirm</p></div>
           <div id="mobile-bar5" @mouseover="changeColor5()" class="bg-blue-500 w-3/12 h-12 bis-mobile-before z-10 text-xs -ml-5"><p class="mobile-arrow-text">Tutorial</p></div>
            <!-- <ul class="h-full flex justify-center items-center pl-12 bg-slate-300">

                <li id="bar1" @mouseover="changeColor1()" class="bis2 z-50 bis bg-neutral-300 py-1 w-3/12  -ml-7 flex justify-end pr-8"><p>Personal Info</p></li>         

                <li id="bar2" @mouseover="changeColor2()" class="bis2 z-40  bg-neutral-300 py-1 w-3/12  -ml-16 flex justify-end pr-6"><p>Business Info</p></li>

                <li id="bar3" @mouseover="changeColor3()" class="bis2 z-30 bg-neutral-300 py-1 w-3/12  border-black -ml-16 flex justify-end pr-10"><p>Payment</p></li>

                <li id="bar4" @mouseover="changeColor4()" class="bis2 z-20 bg-neutral-300 py-1 w-3/12  border-black -ml-16 flex justify-end pr-7"><p>Confirmation</p></li>

                <li id="bar5" @mouseover="changeColor5()" class="bis2 z-10 bg-neutral-300 py-1 w-3/12  border-black -ml-16 flex justify-end pr-12"><p>Tutorial</p></li>

            </ul> -->
        </div>

        <!-- PROGRESS BAR FOR IPAD AND UP IN PIXEL WIDTH -->
        <div class="hidden sm:block w-screen h-20 mt-2">
            <ul class="h-full flex justify-center items-center pl-12 bg-slate-300">

                <li id="bar1" @mouseover="changeColor1()" class="bis2 z-50 bis bg-neutral-300 py-1 w-3/12  -ml-7 flex justify-end pr-8"><p>Personal Info</p></li>         

                <li id="bar2" @mouseover="changeColor2()" class="bis2 z-40  bg-neutral-300 py-1 w-3/12  -ml-16 flex justify-end pr-6"><p>Business Info</p></li>

                <li id="bar3" @mouseover="changeColor3()" class="bis2 z-30 bg-neutral-300 py-1 w-3/12  border-black -ml-16 flex justify-end pr-10"><p>Payment</p></li>

                <li id="bar4" @mouseover="changeColor4()" class="bis2 z-20 bg-neutral-300 py-1 w-3/12  border-black -ml-14 flex justify-end pr-7"><p>Confirmation</p></li>

                <li id="bar5" @mouseover="changeColor5()" class="bis2 z-10 bg-neutral-300 py-1 w-3/12  border-black -ml-16 flex justify-end pr-12"><p>Tutorial</p></li>

            </ul>
        </div>
      <a class="flex justify-start w-full text-center no-underline -mt-5 ml-2 text-xs text-gray-500 hover:text-gray-900" href="/start">Already have an account?</a>
        <div class="w-screen h-full mt-2 flex flex-wrap justify-center reg-header">


    <!-- <h1 @mouseover="openPersonalInfo" class="h-16 py-3 px-5 bg-blue-400">here</h1> -->


	<div class="w-full flex justify-center">
        <!-- <h1 class="bg-blue-600">test</h1> -->
        <transition name="fade" mode="out-in">
            <!-- <PersonalInfo @next="changeColor2('personal-next');"  v-if="activeTab === 'PersonalInfo'"/> -->
            <PersonalInfo @next="changeColor2"  v-if="activeTab === 'PersonalInfo'"/>
        </transition>
        <transition name="fade" mode="out-in">
            <BusinessInfo @prev="backToPersonal();" @next="changeColor3('business-next');" v-if="activeTab === 'BusinessInfo'"/>
        </transition>
        <transition @prev="backToBusiness();" @next="changeColor4('payment-next');" name="fade" mode="out-in">
            <Payment v-if="activeTab === 'Payment'"/>
        </transition>
        <transition @prev="backToPayment();" @next="changeColor5('confirmation-next');" name="fade" mode="out-in">
            <Confirmation v-if="activeTab === 'Confirmation'"/>
        </transition>
        <transition @prev="backToConfirmation();" name="fade" mode="out-in">
            <Tutorial v-if="activeTab === 'Tutorial'"/>
        </transition>
	</div>
<!-- <h1 class="w-screen bg-red-500 flex justify-center text-white">{{form.firstname}}here</h1> -->
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
    tutorial_flag: false
});


onMounted(() => {
//   activeTab.value = 'PersonalInfo';
openPersonalInfo();
changeColor1();
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

function test(){
    console.log("ERERERER");
}

function backToPersonal(){
    activeTab.value = 'PersonalInfo';
    openPersonalInfo();
}

function backToBusiness(){
    activeTab.value = 'BusinessInfo';
    openBusinessInfo();
}

function backToPayment(){
    activeTab.value = 'Payment';
    openPaymentInfo();
}

function backToConfirmation(){
    activeTab.value = 'Confirmation';
    openConfirmation();
}

function changeColor1(dir){
    // console.log("ok ----> "+ dir);
    openPersonalInfo();
    if(activeTab.value == 'PersonalInfo'){
        document.getElementById("bar1").classList.remove('bis2');
        document.getElementById("bar1").classList.add('arrow-height-active');
        document.getElementById("bar1").classList.add('arrow-personal-color');

        document.getElementById("mobile-bar1").classList.remove('bis-mobile-before');
        document.getElementById("mobile-bar1").classList.add('bis-mobile-after');

    }
}

// taking dir from emit. changed 'personal-next' to be passed in form reactive variable. then use if statement
// to make sure the form has not been changed ( or empty )  and if not assign to form array. (e.g form.firstName)
//  NEED TO DO THIS FOR ALL CHANGECOLOR FUNCTIONS. (also need to change the name of the change color funciton to something better)
function changeColor2(dir){
    if(dir.firstName != '' && (dir.firstName != form.firstName)){
        console.log("ok ----> "+ dir.firstName);
        form.firstName = dir.firstName;
    }
    if(progress.business_flag){
        openBusinessInfo();
    }
    if(dir.location == 'personal-next'){
        console.log(activeTab.value);
        // activeTab = 'BusinessInfo';
        if(activeTab.value == 'PersonalInfo'){
            document.getElementById("bar2").classList.remove('bis2');
            document.getElementById("bar2").classList.add('arrow-height-active');
            document.getElementById("bar2").classList.add('bis');

            document.getElementById("mobile-bar2").classList.remove('bis-mobile-before');
            document.getElementById("mobile-bar2").classList.add('bis-mobile-after');
            // document.getElementById("mobile-bar2").classList.add('arrow-height-active');
            // document.getElementById("mobile-bar2").classList.add('bis');

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
            document.getElementById("bar3").classList.add('arrow-height-active');
            document.getElementById("bar3").classList.add('bis');

            document.getElementById("mobile-bar3").classList.remove('bis-mobile-before');
            document.getElementById("mobile-bar3").classList.add('bis-mobile-after');

            activeTab.value = 'Payment';
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
            document.getElementById("bar4").classList.add('arrow-height-active');
            document.getElementById("bar4").classList.add('bis');

            document.getElementById("mobile-bar4").classList.remove('bis-mobile-before');
            document.getElementById("mobile-bar4").classList.add('bis-mobile-after');

            activeTab.value = 'Confirmation';
            console.log('here-->'+activeTab.value);
        }
        openConfirmation();
    }
    // use emit from personal info next button to enable progress.personalinfo_flag true then if true can change color
}

function changeColor5(dir){
    console.log("boobz  "+progress.tutorial_flag);
    if(progress.tutorial_flag){
        openTutorial();
        console.log("test tutorial");
    }
    if(dir == 'confirmation-next'){
        console.log(activeTab.value);
        if(activeTab.value == 'Confirmation'){
            document.getElementById("bar5").classList.remove('bis2');
            document.getElementById("bar5").classList.add('arrow-height-active');
            document.getElementById("bar5").classList.add('bis');

            document.getElementById("mobile-bar5").classList.remove('bis-mobile-before');
            document.getElementById("mobile-bar5").classList.add('bis-mobile-after');

            activeTab.value = 'Tutorial';
            console.log('here-->'+activeTab.value);
            openTutorial();
        }
        
        
    }
}
// function changeColor5(dir){
// openTutorial();
// }


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
background-image: linear-gradient(to right bottom, #173561, #233452, #435166, #51647c, #203d50);}
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




/* div {
    font: 22px Arial;
    display: inline-block;
    padding: 1em 2em;
    text-align: center;
    color: white;
    background: red; 

    background: linear-gradient(to left, salmon 50%, lightblue 50%) right;
    background-size: 200%;
    transition: .5s ease-out;
}
div:hover {
    background-position: left;
}
 */


.arrow-height-active{
    height: 3rem; 
    position: relative;
    vertical-align: middle;
}
 .arrow-height-active p{
    margin-left: 1rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
 }


.bis-mobile-before {
    margin-top: 1.3rem;
    height: 2.3rem;
    transition: .5s ease-out;
    color: white;
    background: 
        linear-gradient(to top, white, white) no-repeat
        /* border-left*/,
        linear-gradient(to left, transparent 1.45em, white 1.45em) no-repeat
        /* border-top */,
        linear-gradient(to left, transparent 1.45em, white 1.45em) no-repeat bottom
        /* border-bottom */, 
        linear-gradient(-45deg, transparent 1em, white 1em, white 1.1em, #929ca0 1em, #929ca0) bottom,
        /*border top righ and background  +bg-size to cover half bottom */
        /* linear-gradient(-135deg, transparent 1em, white 1em, white 1.1em, #25B1ED 1em) top */
        linear-gradient(-135deg, transparent 1em, white 1em, white 1.1em, #929ca0 1em, #929ca0) top
        /* border-bottom right and background +different color for the show.  +bg-size to cover half bottom */
        /* rgba(0, 0, 0, 0.00) */
        /* see where the box lays */
        ;
    background-repeat: no-repeat;
    /* no-repeat please */
    background-size: 0.08em 100%, 100% 0.075em, 100% 0.075em, 100% 50.9%, 100% 50.9%;
    /* spray each image/gradient only where shapes has to be drawn */
    /* background-size: 200%; */
    transition: .2s ease-out;
    
}

.bis-mobile-after {
    
    margin-top: 1.3rem;
    height: 2.3rem;
    transition: .5s ease-out;
    color: white;
    background: 
        linear-gradient(to top, white, white) no-repeat
        /* border-left*/,
        linear-gradient(to left, transparent 1.45em, white 1.45em) no-repeat
        /* border-top */,
        linear-gradient(to left, transparent 1.45em, white 1.45em) no-repeat bottom
        /* border-bottom */, 
        linear-gradient(-45deg, transparent 1em, white 1em, white 1.1em, #025579 1em, rgb(3, 118, 172)) bottom,
        /*border top righ and background  +bg-size to cover half bottom */
        /* linear-gradient(-135deg, transparent 1em, white 1em, white 1.1em, #25B1ED 1em) top */
        linear-gradient(-135deg, transparent 1em, white 1em, white 1.1em, #025579 1em, rgb(3, 118, 172)) top
        /* border-bottom right and background +different color for the show.  +bg-size to cover half bottom */
        /* rgba(0, 0, 0, 0.00) */
        /* see where the box lays */
        ;
    background-repeat: no-repeat;
    /* no-repeat please */
    background-size: 0.08em 100%, 100% 0.075em, 100% 0.075em, 100% 50.9%, 100% 50.9%;
    /* spray each image/gradient only where shapes has to be drawn */
    /* background-size: 200%; */
    transition: .2s ease-out;
    
}


.bis {
    height: 2.75rem;
    transition: .5s ease-out;
    color: white;
    background: 
        linear-gradient(to top, white, white) no-repeat
        /* border-left*/,
        linear-gradient(to left, transparent 1.45em, white 1.45em) no-repeat
        /* border-top */,
        linear-gradient(to left, transparent 1.45em, white 1.45em) no-repeat bottom
        /* border-bottom */, 
        linear-gradient(-45deg, transparent 1em, white 1em, white 1.1em, #025579 1em, rgb(3, 118, 172)) bottom,
        /*border top righ and background  +bg-size to cover half bottom */
        /* linear-gradient(-135deg, transparent 1em, white 1em, white 1.1em, #25B1ED 1em) top */
        linear-gradient(-135deg, transparent 1em, white 1em, white 1.1em, #025579 1em, rgb(3, 118, 172)) top
        /* border-bottom right and background +different color for the show.  +bg-size to cover half bottom */
        /* rgba(0, 0, 0, 0.00) */
        /* see where the box lays */
        ;
    background-repeat: no-repeat;
    /* no-repeat please */
    background-size: 0.08em 100%, 100% 0.075em, 100% 0.075em, 100% 50.9%, 100% 50.9%;
    /* spray each image/gradient only where shapes has to be drawn */
    /* background-size: 200%; */
    transition: .2s ease-out;
    
}

.bis2 {
    height: 1.91rem;
    color: black;
    background: 
        linear-gradient(to top, white, white) no-repeat
        /* border-left*/,
        linear-gradient(to left, transparent 1.45em, #435166 1.45em) no-repeat
        /* border-top */,
        linear-gradient(to left, transparent 1.45em, #435166 1.45em) no-repeat bottom
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

.mobile-arrow-text{
    font-size: .7rem;
    margin-top: .60rem;
    left: 35%;
}
</style>