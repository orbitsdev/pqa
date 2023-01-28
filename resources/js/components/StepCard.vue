

<template>
    <div
    class="  md:py-4 lg:py-6 md:px-2 lg:px-4  flex flex-col items-center justify-center"
  >
    <dd class="lg:text-3xl pqa-text-blue-2 lg:font-extrabold">
      <i class="fa-regular fa-newspaper"></i>
    </dd>
    <p class="font-raleway md:mt-1 lg:mt-2 uppercase font-extrabold md:lg lg:text-2xl pqa-text-blue-2">Apply</p>
    <!-- <p class="uppercase mt-6 text-lg font-semibold leading-8 tracking-tight pqa-text-blue-2">Transfers are instant</p> -->
    <p class="font-ralewa uppercase md:text-xs lg:text-lg md:leading-4 lg:leading-5 lg:font-medium text-center">
      For Assesment Cycle Lorem ipsum dolor s
    </p>
    <button
      class="md:mt-2 lg:mt-2 pqa-button-hover md:text-xs lg:text-base py-1 md:px-2 lg:px-4 pqa-text-blue-3 text-white"
    >
      <span> See Details </span>
      <i class="fa-solid fa-chevron-right lg:ml-1 lg:text-xs"></i>
    </button>
  </div>
</template>

<script>
    export default {
       props: ['step'] 
    }
</script>

<style  scoped>

</style>