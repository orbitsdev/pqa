<template>
  <div>
    <!-- NAVIGATION -->
    <!-- <AdminMobileNav/> -->
    <AdminNav :isOpen="isOpen" />
    <div
      :class="['flex flex-1 flex-col pqa-header pqa-admin-nav', isOpen ? 'md:pl-64' : '']"
    >
      <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
        <div class="flex flex-1 items-center justify-between px-4">
          <div class="flex items-center">
            <button @click="isOpen = !isOpen">
              <AnimatedAdminMenu :isOpen="isOpen" />
            </button>
            <p class="font-raleway ml-3 font-bold text-lg ml-4 font-semibold capitalize">
              {{ message }}
            </p>
          </div>
          <LogoutCard />
        </div>
      </div>
      <main class="py-6 px-4">
        <!-- {{ $page.component }} -->
        <!-- ALL CONTENT WILL DISPLAY HERE -->
        <slot></slot>
      </main>
    </div>
  </div>
</template>

<script>
import AdminNav from "./AdminNav.vue";
import AdminMobileNav from "./AdminMobileNav.vue";
import LogoutCard from "./LogoutCard.vue";
export default {
  computed: {
    message() {
      switch (this.$page.component) {
        case "admin/Dashboard":
          return "Dashboard";
        case "admin/EventManagement":
          return "Event Management";
        case "admin/AboutPQA":
          return "About PQA";
        case "admin/Applicants":
          return "Applicants";
        case "admin/Assessores":
          return "Assessores";
        case "admin/Resources":
          return "Resources";
        case "admin/NewsAndArticles":
          return "News And Articles";
        case "admin/FQA":
          return "Frequently Ask";
        case "admin/ContactInformation":
          return "Contact Information";
      }
    },
  },

  components: {
    AdminNav,
    AdminMobileNav,
    LogoutCard,
  },

  data() {
    return {
      isOpen: true,
    };
  },
};
</script>

<style lang="scss" scoped>
.pqa-header {
  transition: all 0.3s ease-in-out;
}
</style>
