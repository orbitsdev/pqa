

<template>
    <div :class="['lg:hidden fixed top-0 z-20 pqa-blue-1 min-h-screen  max-h-screen overflow-y-auto transition-all overflow-hidden  ', isOpen ? 'w-60 ' : 'w-0'] ">
        <div class="flex flex-grow flex-col overflow-y-auto pqa-blue-1 pt-5">
            <div class="flex r flex-shrink-0 items-center px-4">
              <div class="bg-white rounded-full">
                  <img class="h-8 w-auto" src="/assets/pqa-logo.png" alt="Your Company">
              </div>
              <p class="font-play-fair text-xl ml-3 text-white ">PQA</p>
            </div>
            <div class="mt-5 flex flex-1 flex-col">
              <nav class="flex-1 space-y-1 px-2 pb-4">
                
                <a href="#" class="pqa-gold-3 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                  <!-- Heroicon name: outline/home -->
  
                 
                    Home                    

                </a>
                <a href="#" class=" text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                  <!-- Heroicon name: outline/home -->
  
               
                    
                    
                 Applicant
                </a>
                <a href="#" class=" text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                  <!-- Heroicon name: outline/home -->
  
                
                    
                    Accessores 
                </a>
                <a href="#" class=" text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                  <!-- Heroicon name: outline/home -->
  
                    
                  
                    
                  Resources
                </a>
                <a href="#" class=" text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                  <!-- Heroicon name: outline/home -->
                
                    
                    
                    About PQA
                </a>
                <a href="#" class=" text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                  <!-- Heroicon name: outline/home -->
                
                    
                 Contact 
                </a>
      
                
              
              
              </nav>
            </div>
          </div>
    </div>
</template>

<script>

import {Link} from '@inertiajs/vue3'
    export default {
        components: {
            Link,
        },
        props: {
            isOpen: {
                type: Boolean,
                default: false,
            },
        },
        
    }
</script>

<style lang="scss" scoped>


.transition-all {
    transition: all 300ms ease-in-out;
}






</style>