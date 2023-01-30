

<template>
   
<div class="md:hidden mx-5 mt-4">
    
<aside class="">
  <!-- <nav class="grid grid-cols-4" aria-label="Tabs">

        <button class="py-1  text-sm uppercase border-b-2  border-blue-600 "> News </button>
        <button class="py-1  text-sm uppercase  "> articles </button>
        <button class="py-1  text-sm uppercase  "> Links </button>
        <button class="py-1  text-sm uppercase  "> Social </button>
      </nav> -->
    </aside>

    <aside class="mt-4 ">
        <TitleAndButton>
            <template #title>
              <TextWithBottomBorder> News </TextWithBottomBorder>
            </template>
            <template #button>
              <GoldButton> See all news </GoldButton>
            </template>
          </TitleAndButton>
            <ul class="">
                <li v-for="item in news" :key="item" class="bg-white shadow max-h-36  relative grid grid-cols-12 gap-y-2 gap-x-2 mb-6 overflow-hidden">
                    <div class="col-span-5 relative">
                      <div class="w-full  pqa-gold-linear-2 h-32 py-2 relative rounded">

                        <!-- <div class=" pqa-gold-linear-2 absolute right-0 top-0 left-0 bottom-0 w-full z-0 rounded "></div>  -->
                        <div class="max-h-36  w-full  absolute bottom-2 left-2 right-2 top-2  z-5 rounded ">


                            <img src="/assets/cover1.png" alt="" class="h-full w-full rounded"/>
                            
                        </div> 
                         
                      </div>
                    </div>
                    <div class="col-span-7 p-2 relative">
                        <p class="font-raleway text-base font-extrabold leading-4">DTI LAUUD PQA REGIONAL CHAMPION</p>
                        <p class="font-raleway text-xs leading-4 mt-2 overflow-hidden max-h-10 ">Lorem ipsum dolor sit amet consectetur adipisicing elisum dolor sit amet consectetur adipisicing elisum dolor sit amet consectetur adipisicing elisum dolor sit amet consectetur adipisicing elit. Reiciectetur adipisicing elit. Reiciendis odit misicing elit. Reiciendis odit misicing elit. Reiciendis odit met? Velit, quaerat.</p>
                        <NewsButton class=" "> Continue Reading </NewsButton>
                     
                    </div>
                  </li>
                  
            </ul>
    </aside>
    <aside class="mt-4 ">
        <TitleAndButton>
            <template #title>
              <TextWithBottomBorder> Artilces </TextWithBottomBorder>
            </template>
            <template #button>
              <GoldButton> See all articles </GoldButton>
            </template>
          </TitleAndButton>
          <ul class="mt-2">
            <ArticleCard v-for="n in articles" :key="n" />
          </ul>
    </aside>
</div>
  
</template>

<script>
    export default {
        data() {
            return {
                news: [1,2,3,4],
                articles: [1,2,3,4],
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>