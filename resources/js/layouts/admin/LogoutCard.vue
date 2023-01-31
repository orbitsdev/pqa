<template>
  <div class="ml-4 flex items-center md:ml-6">
    <!-- Profile dropdown -->
    <div class="relative ml-3">
      <div>
        <button
          @click="isOpen = !isOpen"
          type="button"
          class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          id="user-menu-button"
          aria-expanded="false"
          aria-haspopup="true"
        >
          <span class="sr-only">Open user menu</span>
          <img
            class="h-8 w-8 rounded-full"
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt=""
          />
        </button>
      </div>

      <transition name="fade">
        <div
          v-if="isOpen"
          class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
          role="menu"
          aria-orientation="vertical"
          aria-labelledby="user-menu-button"
          tabindex="-1"
        >
          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-700"
            role="menuitem"
            tabindex="-1"
            id="user-menu-item-0"
            >Your Profile</a
          >

          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-700"
            role="menuitem"
            tabindex="-1"
            id="user-menu-item-1"
            >Settings</a
          >

          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-700"
            role="menuitem"
            tabindex="-1"
            id="user-menu-item-2"
            >Sign out</a
          >
        </div>
      </transition>
    </div>
  </div>
</template>

<script>
export default {
    data() {
    return {
      isOpen: false,
    };
  },
  
  methods: {
    closeOnClickOutside(event) {
      if (!this.$el.contains(event.target)) {
        this.isOpen = false;
      }
    },
  },
  
  mounted() {
    document.addEventListener("click", this.closeOnClickOutside);
  },
  beforeDestroy() {
    document.removeEventListener("click", this.closeOnClickOutside);
  },

};
</script>

<style scoped>
.fade-enter-from {
  transform: translateY(-10px);
  opacity: 0;
}
.fade-leave-to {
  transform: translateY(-10px);
  opacity: 1;
}

.fade-enter-active {
  transition: all 0.1s ease-out;
}
.fade-leave-active {
  transition: all 0.1s ease-in;
}
</style>
