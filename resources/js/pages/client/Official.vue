<template>
  <!-- NAVIGATION -->
  <section class="z-10 pqa-blue-1 px-20 relative">
    <aside class="">
      <ul class="text-white flex justify-end items-center lg:py-4">
        <li class="lg:ml-4">
          <img class="lg:h-6 lg:w-6" src="/assets/fb-logo.svg" alt="" />
        </li>
        <li class="lg:ml-4">
          <img class="lg:h-6 lg:w-6" src="/assets/twitter-logo.svg" alt="" />
        </li>
        <li class="lg:ml-4">
          <img class="lg:h-6 lg:w-6" src="/assets/indeed-logo.svg" alt="" />
        </li>
      </ul>
    </aside>

    <aside class="pqa-blue-linear flex justify-between items-center">
      <p class="text-white font-play-fair lg:text-xl lg:font-bold lg:ml-20">
        Philippine Quality Award
      </p>
      <ul class="flex items-center">
        <li
          class="font-raleway text-white uppercase lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
        >
          home
        </li>
        <li
          class="font-raleway text-white uppercase lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text relative"
        >
          <span> applicant </span>
          <i class="fa-solid fa-chevron-down ml-1"></i>
          <ul class="absolute pqa-blue-2 top-0 left-0 right-0 lg:mt-11 w-full rounded">
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
          </ul>
        </li>
        <li
          class="font-raleway text-white uppercase lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text relative"
        >
          <span> accessors </span>
          <i class="fa-solid fa-chevron-down ml-1"></i>
          <ul class="absolute pqa-blue-2 top-0 left-0 right-0 lg:mt-11 w-full rounded">
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
          </ul>
        </li>
        <li
          class="font-raleway text-white uppercase lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
        >
          resources
        </li>
        <li
          class="font-raleway text-white uppercase lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text relative"
        >
          <span> about pqa </span>
          <i class="fa-solid fa-chevron-down ml-1"></i>
          <ul class="absolute pqa-blue-2 top-0 left-0 right-0 lg:mt-11 w-full rounded">
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
            <li class="lg:py-2 lg:px-2 lg:text-sm capitalize pqa-nav-text">Option 1</li>
          </ul>
        </li>
        <li
          class="font-raleway text-white uppercase lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
        >
          fqa
        </li>
        <li
          class="font-raleway text-white uppercase lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
        >
          contact ise
        </li>
        <li
          class="font-raleway text-white uppercase lg:text-sm lg:ml-2 lg:py-4 lg:px-3 cursor-pointer pqa-nav-text"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-5 h-5 text-white"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
            />
          </svg>
        </li>
      </ul>
    </aside>

    <aside class="bg-white inline-block absolute lg:left-15 lg:top-0 lg:bottom-0 lg:py-2">
      <div class="flex items-center justify-center flex-col">
        <img src="/assets/pqa-logo.png" alt="" class="lg:h-16 lg:w-16" />
        <p class="uppercase font-bold font-play-fair lg:text-sm">pqa</p>
      </div>
    </aside>
  </section>

  <!-- CAROSEL -->

  <section class="lg:bg-white lg:pb-40 lg:relative">
    <aside class="bg-red">
      <v-carousel
        hide-delimiters
        :color="'#ffff'"
        delimiter-icon="mdi-square"
        cycle
        height="590"
        show-arrows="hover"
      >
        <!-- <template v-slot:prev="{ props }">


            <button
            class="p-4 rounded-full text-white font-bolx text-lg pqa-carousel-button "
            @click="props.onClick"
            >
            <i class="fa-solid fa-chevron-left"></i>

            </button>
          </template>
          <template v-slot:next="{ props }">

            <button
            class="p-4 rounded-full text-white font-bolx text-lg pqa-carousel-button "
            @click="props.onClick"
            >
            <i class="fa-solid fa-chevron-right"></i>
            </button>
          </template> -->

        <v-carousel-item src="/assets/cover1.png" cover></v-carousel-item>

        <v-carousel-item src="/assets/cover1.png" cover></v-carousel-item>

        <v-carousel-item src="/assets/cover1.png" cover></v-carousel-item>
      </v-carousel>
      <div class="h-4"></div>
    </aside>
    <aside
      class="lg:bg-white lg:shadow-md pqa-border-bottom lg:border-b-2 lg:absolute lg:inset-x-0 lg:bottom-0 lg:mx-20 lg:mb-0 z-20"
    >
      <ul class="lg:flex lg:justify-around">
        <li v-for="step in steps" :key="step">
          <div
            class="lg:py-6 lg:px-12 lg:flex lg:justify-center lg:flex-col lg:items-center"
          >
            <dd class="lg:text-3xl pqa-text-blue-2 lg:font-extrabold">
              <i class="fa-regular fa-newspaper"></i>
            </dd>
            <p class="uppercase lg:font-extrabold pqa-text-blue-2">Apply</p>
            <!-- <p class="uppercase mt-6 text-lg font-semibold leading-8 tracking-tight pqa-text-blue-2">Transfers are instant</p> -->
            <p class="uppercase lg:text-sm lg:font-medium lg:text-center">
              For Assesment Cycle This this the department
            </p>
            <button
              class="lg:mt-4 pqa-button-hover lg:py-1 lg:px-4 pqa-text-blue-3 lg:text-white"
            >
              <span> More Details </span>
              <i class="fa-solid fa-chevron-right lg:ml-2"></i>
            </button>
          </div>
        </li>
      </ul>
    </aside>
  </section>
  <!-- NEWS -->

  <section class="lg:px-20 lg:mt-10">
    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
      <aside class="col-span-8">
        <aside class=" ">
          <aside class="lg:py-2 ">
            <div class="lg:flex lg:justify-between lg:items-center">
              
              <TextWithBottomBorder>
                News
              </TextWithBottomBorder>
              <GoldButton> See all news </GoldButton>
            </div>
          </aside>
          <aside class="mb-6">
            <ul class="lg:grid lg:grid-cols-3 xl:grid-cols-4 lg:gap-x-2  xl:gap-x-2 ">
              <li class="rounded shadow lg:p-2 lg:h-72 lg:overflow-hidden relative" v-for="n in news" :key="n">
                <div class="">
                  <div class="">
                    <img src="/assets/exampl2.png" alt="" class="w-full" />
                  </div>
                  <div
                    class=" font-raleway lg:flex lg:text-xs lg:justify-between lg:items-center lg:py-2"
                  >
                    <p
                      class="lg:font-bold lg:p-1 lg:px-2 pqa-text-gold-4 lg:rounded-lg pqa-gold-4"
                    >
                      News
                    </p>
                    <p class="lg:text-xs">Monday | April 04, 2022</p>
                  </div>
                  <div class="">
                    <p
                    class="font-raleway lg:text-base lg:font-extrabold lg:leading-4 lg:my-1"
                  >
                    DTI Lauds PQA Regional Champions.
                  </p>
                  <p class="font-raleway lg:text-xs lg:leading-1 mt-2 ">
                    In its bid to intensify the promotion of the PQA nationwide, the
                    Department of Trade and Industry (DTI) pushed for the advancement of
                    small and medium-sized enterprises (SMEs)
                  </p>
                  
               
                  </div>
                
                </div>
                <div class=" px-2 bg-gradient-to-t from-yellow-600 to-tranparent  absolute bottom-0 lg:inset-x-0 z-0 pt-4" >
                  <NewsButton> Continue Reading </NewsButton>
                </div>
              </li>
            </ul>
          </aside>

          <aside class="  ">
            <aside class="lg:py-2 ">
              <div class="lg:flex lg:justify-between lg:items-center">
                <TextWithBottomBorder>
                  Articles
                </TextWithBottomBorder>
                <GoldButton> See all articles </GoldButton>
              </div>
            </aside>
          </aside>
          <aside>
            <ul class="mt-2">
              <li class="lg:py-4 lg:mb-6 lg:shadow-md lg:px-6 border lg:rounded-sm" v-for="n in articles" :key="n">
                <div class="">
                  <p class="font-raleway lg:text-xs">Monday | April 04, 2022</p>
                  <p class="font-raleway lg:text-lg lg:font-bold lg:mt-2">
                    PQA Recipient Organizations (as of 2020)
                  </p>
                  <p class="font-raleway lg:text-base lg:leading-1 lg:mt-2">
                    In its bid to intensify the promotion of the PQA nationwide, the
                    Department of Trade and Industry (DTI) pushed for the advancement of
                    small and medium-sized enterprises (SMEs) in quality management as it
                    recognized the pioneer recipient
                  </p>
  
                  <button
                    class="lg:text-xs lg:flex lg:items-center lg:font-bold lg:mt-2 pqa-text-gold-4"
                  >
                    <span class="lg:mr-2">Click to continue reading</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-5 h-5"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                      />
                    </svg>
                  </button>
                </div>
              </li>
            </ul>
          </aside>
          </aside>

          
      </aside>
      <aside class=" col-span-4   ">
        <ul class="lg:px-3">
          <li class="lg:mb-2  px-5 py-2 rounded  ">
            <div>
              <div class="lg:mb-3">

                <TextWithBottomBorder>
                  Facebook
                </TextWithBottomBorder>
              </div>
              <div class="lg:grid-col-3   ">
                <img src="/assets/cover1.png" alt="" class="lg:h-40 w-full">
              </div>
            </div>
          </li>
          <li class="lg:mb-2  px-5 py-2 rounded   ">
            <div>
              <div class="lg:mb-3">

                <TextWithBottomBorder>
                  Youtube
                </TextWithBottomBorder>
              </div>
              <div class="lg:grid-col-3   ">
                <img src="/assets/cover1.png" alt="" class="lg:h-40 w-full">
              </div>
            </div>
          </li>
        </ul>
      </aside>
    </div>
  </section>

  <section>
    <ul>
      <li></li>
    </ul>
  </section>
  
</template>

<script>
export default {
  data() {
    return {
      news: [1, 2, 3, 4],
      articles: [1, 2],
      steps: [1, 2, 3, 4],
      organizations: [1, 2, 3, 4,6],
    };
  },
  props: {
    data: {
      type: String,
    },
  },
};
</script>

<style scoped></style>
