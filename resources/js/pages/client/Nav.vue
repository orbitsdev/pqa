

<template>
    <section class="z-10 pqa-blue-1 md:px-6 lg:px-16 relative">
        <aside class="">
          <ul class="text-white flex justify-end items-center md:py-3 lg:py-4">
            <li class="md:px-2 lg:px-3">
              <img class="md:h-5 md:w-5  lg:h-6 lg:w-6" src="/assets/fb-logo.svg" alt="" />
            </li>
            <li class="md:px-2 lg:px-3">
              <img class="md:h-5 md:w-5  lg:h-6 lg:w-6" src="/assets/twitter-logo.svg" alt="" />
            </li>
            <li class="md:px-2 lg:px-3">
              <img class="md:h-5 md:w-5  lg:h-6 lg:w-6" src="/assets/indeed-logo.svg" alt="" />
            </li>
          </ul>
        </aside>
    
        <aside class="pqa-blue-linear flex justify-between items-center shadow">
          <p class="font-raleway text-white font-play-fair md:text-base  md:font-bold  md:ml-16 lg:text-xl lg:font-bold lg:ml-24">
          GOVEPH
          </p>
          <ul class="flex items-center">
            <li
              class="md:hidden lg:block font-raleway text-white uppercase md:text-xs md:py-3 md:ml-3 lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
            >
              home
            </li>
            <li
              class="md:hidden lg:block font-raleway text-white uppercase md:text-xs md:py-3 md:ml-3 lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text relative"
            >
              <span> applicant </span>
              <i class="fa-solid fa-chevron-down ml-1"></i>
              <ul class="absolute pqa-blue-2 top-0 left-0 right-0 md:mt-9 lg:mt-11 w-full ">
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
              </ul>
            </li>
            <li
              class="md:hidden lg:block font-raleway text-white uppercase md:text-xs md:py-3 md:ml-3 lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text relative"
            >
              <span> accessors </span>
              <i class="fa-solid fa-chevron-down ml-1"></i>
              <ul class="absolute pqa-blue-2 top-0 left-0 right-0 md:mt-9 lg:mt-11 w-full ">
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
              </ul>
            </li>
            <li
              class="md:hidden lg:block font-raleway text-white uppercase md:text-xs md:py-3 md:ml-3 lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
            >
              resources
            </li>
            <li
              class="md:hidden lg:block font-raleway text-white uppercase md:text-xs md:py-3 md:ml-3 lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text relative"
            >
              <span> about pqa </span>
              <i class="fa-solid fa-chevron-down ml-1"></i>
              <ul class="absolute pqa-blue-2 top-0 left-0 right-0 md:mt-9 lg:mt-11 w-full ">
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
                <li class=" md:text-xs py-2 px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
              </ul>
            </li>
            <li
              class="md:hidden lg:block font-raleway text-white uppercase md:text-xs md:py-3 md:ml-3 lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
            >
              fqa
            </li>
            <li
              class="md:hidden lg:block font-raleway text-white uppercase md:text-xs md:py-3 md:ml-3 lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
            >
              contact
            </li>
            <li
              class="lg:block font-raleway text-white uppercase md:text-xs md:py-3 md:ml-3 lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="md:h-5 md:w-4 lg:w-5 lg:h-5 text-white"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                />
            </svg>
            </li>
            <li
            class="md:hidden lg:block font-raleway text-white uppercase md:text-xs md:py-3 md:ml-3 lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
            >
            Login
          </li>
          <li
            @click="isMenuOpen = !isMenuOpen"
            class="md:px-2 lg:hidden font-raleway text-white uppercase md:text-xs md:py-2 md:ml-3 lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
          >
                 <AnimatedMenuIcon :isOpen="isMenuOpen"/>
          </li>
          </ul>
        </aside>
    
        <aside class="bg-white inline-block absolute md:py-1 md:top-0 lg:left-20 lg:top-0 lg:bottom-0 lg:py-2">
          <div class="flex items-center justify-center flex-col">
            <img src="/assets/pqa-logo.png" alt="" class="md:h-14 md:w-14 lg:h-16 lg:w-16" />
            <p class="uppercase font-bold font-play-fair lg:text-sm">pqa</p>
          </div>
        </aside>
        
      </section>
</template>

<script>
    export default {
      data() {
        return {
            isMenuOpen: false
        }
      },
    }
</script>

<style lang="scss" scoped>

</style>