


<template>
<div>
   
  <!-- NAVIGATION -->
  <!-- <AdminMobileNav/> -->
    <AdminNav :isOpen="isOpen"/>
    <div :class="['flex flex-1 flex-col pqa-header pqa-admin-nav', isOpen ? 'md:pl-64': '']">
     
      <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
        <div class="flex flex-1 items-center justify-between px-4">
      
          <button @click="isOpen = !isOpen">
          <AnimatedAdminMenu :isOpen="isOpen"/>
        </button>
        <LogoutCard/>
        </div>
      </div>  
      <main class="p-6">
        <!-- ALL CONTENT WILL DISPLAY HERE -->
        <slot></slot>
      </main>
    </div>
  </div>
  
</template>

<script>
import AdminNav from './AdminNav.vue';
import AdminMobileNav from './AdminMobileNav.vue';
import LogoutCard from './LogoutCard.vue';
    export default {
        components: {
            AdminNav,
            AdminMobileNav,
            LogoutCard,
        },

        data() {
          return {
            isOpen: true
          }
        },
    }
</script>

<style lang="scss" scoped>

.pqa-header{
  transition: all 0.3s ease-in-out;
}


</style>