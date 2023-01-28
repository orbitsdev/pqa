<template>
 

    <div class="relative border md:col-span-4  md:max-h-full lg:max-h-96 lg:overflow-hidden   lg:col-span-6  xl:col-span-3"> 
        <div>
          <div class="">
            <img src="/assets/exampl2.png" alt="" class="lg:h-48 w-full rounded" />
          </div>
          <div
          class="lg:px-4  md:px-2 font-raleway flex md:text-xs   lg:text-xs  md:justify-between lg:justify-between items-center md:py-2 lg:py-2"
        >
          <p
            class=" lg:text-sm lg:font-bold  lg:p-1  pqa-text-gold-4  lg:rounded-lg pqa-gold-4"
          >
            News
          </p>
          <p class="md:leading-3 md:text-xs  lg:text-sm"> Monday | April 04, 2022 </p>
        </div>
        <div class="md:px-2 lg:px-4">
          <p
          class="font-raleway md:text-sm lg:text-lg font-extrabold md:leading-3 lg:leading-4 lg:my-1"
        >
          DTI Lauds PQA Regional Champions.
        </p>
        <p class="font-raleway md:text-xs  lg:text-base lg:leading-1 mt-2 ">
          In its bid to intensify the promotion of the PQA nationwide, the
          Department of Trade and Industry (DTI) pushed for the advancement of
          small and medium-sized enterprises (SMEs)
        </p>
        
        </div>

        </div>  
        <div class=" px-2 bg-gradient-to-t  from-yellow-600 to-tranparent absolute bottom-0 inset-x-0 z-0 pt-4" >
          <NewsButton> Continue Reading </NewsButton>
        </div>
        </div>
</template>

<script>
    export default {
        props: ['news'],
    }
</script>

<style lang="scss" scoped>

</style>