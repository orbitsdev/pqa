

<template>
    <div
    class="hidden md:py-4 lg:py-6 md:px-2 lg:px-4  md:flex flex-col items-center justify-center"
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
      <i class="fa-solid fa-chevron-right  lg:ml-1 lg:text-xs"></i>
    </button>
  </div>


  <!-- for mobile -->
  <!-- <div class="md:hidden p-2 mb-2 border shadow-sm grid grid-cols-12  rounded-lg">
    <div class="col-span-2 flex justify-center">
      <div class=" rounded-full  flex justify-center  items-center  bg-blue-50 h-10 w-10">
        <i class="fa-regular fa-newspaper text-lg"></i>
      </div>
    </div>
      
    <div class=" col-span-10">
      <p class="font-extrabold pqa-text-blue-2  text-sm">Apply</p>
      <p class="text-xs leading-4 mt-1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis illo ad modi debitis saepe veritatis adipisci odit maxime, autem hic, 
      </p>
   
    </div>
  </div> -->
</template>

<script>
    export default {
       props: ['step'] 
    }
</script>

<style  scoped>


</style>