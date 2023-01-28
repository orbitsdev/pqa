

<template>
    <div v-for="(n, index) in organizations" :key="n" :class="[index === 0 ? 'md:col-span-4 lg:col-span-4 ' : '']">
        <div v-if="index===0" class="flex ustify-center items-center  md:p-4 lg:p-10  flex-col  ">
          <i class="fa-solid fa-award pqa-text-gold-4 md:text-3xl lg:text-5xl font-bold"></i>
          <p class="font-raleway md:text-3xl  lg:text-6xl font-extrabold pqa-text-blue-1  md:mt-1 lg:mt-2"> 1</p>
          <p class="font-raleway  md:text-lg lg:text-2xl font-extrabold pqa-text-blue-1"> Recipient Organization </p>
        </div>
        <div  v-else class="flex justify-center items-center  flex-col   md:p-3  md:px-2 lg:p-6  lg:px-4  ">
          <p class="font-raleway md:text-3xl  lg:text-7xl font-extrabold pqa-text-blue-1"> {{index}}</p>
          <p class="font-raleway md:text-sm md:leading-4  lg:text-xl font-extrabold pqa-text-blue-1 text-center  lg:leading-5 md:mt-3 lg:mt-5"> Recognition for Profiency in Qality Management </p>
          <p class="uppercase md:text-xs lg:text-sm pqa-text-gold-4 font-bold md:mt-2 lg:mt-4">level {{index+1}} </p>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            organizations: {
                type: Array,
                default: []
            },
        },
    }
</script>

<style lang="scss" scoped>

</style>