<script setup>
import WelcomeItem from './WelcomeItem.vue'
import CheckInBtn from './buttons/CheckInBtn.vue'
import ClientSearchBtn from './buttons/ClientSearchBtn.vue'
import PersonalTrainingBtn from './buttons/PersonalTrainingBtn.vue'
import ClassesBtn from './buttons/ClassesBtn.vue'
import StoreBtn from './buttons/StoreBtn.vue'
import AdminBtn from './buttons/AdminBtn.vue'

</script>

<template>
  <div id="landing">
    
    <div class="sidemenu">
      <WelcomeItem>
          <template #icon>
              <CheckInBtn />
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
          <ClientSearchBtn />
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
  
</template>

<style scoped>

  #landing{
    width: 100%;
    margin-left: 7%;
    padding-top: 30%;
    /* background-color: blueviolet; */
  }
  .company_name{
    position: fixed;
    margin-top: 1rem;
    left: 1rem;
    bottom: 1rem;
    color: rgba(210, 219, 219, 0.075);
    /* height: 8rem; */
    font-size: .7rem;
    /* margin-bottom: 3rem; */
  }
  .sidemenu{
    box-sizing: border-box;
    margin-top: -25%;
  }

</style>