<template>
  <!-- NAVIGATION -->

  <!-- <seciton> 
      <aside>
          <img src="/assets/pqa-log.png" alt="">
      </aside>    
  </seciton> -->
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
            class="lg:py-6  lg:flex lg:justify-center lg:flex-col lg:items-center"
          >
            <dd class="lg:text-3xl pqa-text-blue-2 lg:font-extrabold">
              <i class="fa-regular fa-newspaper"></i>
            </dd>
            <p class="font-raleway lg:mt-2 uppercase lg:font-extrabold lg:text-2xl pqa-text-blue-2">Apply</p>
            <!-- <p class="uppercase mt-6 text-lg font-semibold leading-8 tracking-tight pqa-text-blue-2">Transfers are instant</p> -->
            <p class="font-ralewa uppercase lg:text-lg lg:leading-5 lg:font-medium lg:text-center">
              For Assesment Cycle
            </p>
            <button
              class="lg:mt-2 pqa-button-hover lg:text-base lg:py-1 lg:px-4 pqa-text-blue-3  lg:text-white"
            >
              <span> See Details </span>
              <i class="fa-solid fa-chevron-right lg:ml-1 lg:text-xs"></i>
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
          <aside class="mb-10">
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
        <ul class="">
          <li class="lg:mb-2  pl-6 py-2 rounded  ">
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
          <li class="lg:mb-2  pl-6 py-2 rounded   ">
            <div>
              <div class="lg:mb-3">

                <TextWithBottomBorder>
                  Youtube
                </TextWithBottomBorder>
              </div>
              <div class="lg:grid-col-3   ">
                <img src="/assets/pqa-channel.png" alt="" class="lg:h-40 w-full">
              </div>
            </div>
          </li>
        </ul>
      </aside>
    </div>
  </section>

  <section class="px-20 lg:py-32  bg-gray-100"   >
    <ul class="lg:grid lg:grid-cols-4">
      <li v-for="(n, index) in organizations" :key="n" :class="[index === 0 ? 'lg:col-span-4 ' : '']">
        <div v-if="index===0" class="lg:flex lg:justify-center lg:items-center   lg:p-10  lg:flex-col  ">
          <i class="fa-solid fa-award pqa-text-gold-4 lg:text-5xl lg:font-bold"></i>
          <p class="font-raleway lg:text-6xl lg:font-extrabold pqa-text-blue-1 lg:mt-2"> 1</p>
          <p class="font-raleway lg:text-2xl lg:font-extrabold pqa-text-blue-1"> Recipient Organization </p>
        </div>
        <div  v-else class="lg:flex lg:justify-center lg:items-center  lg:flex-col   lg:p-6  lg:px-4  ">
          <p class="font-raleway lg:text-7xl lg:font-extrabold pqa-text-blue-1"> {{index}}</p>
          <p class="font-raleway lg:text-xl lg:font-extrabold pqa-text-blue-1 lg:text-center lg:leading-5 lg:mt-5"> Recognition for Profiency in Qality Management </p>
          <p class="uppercase lg:text-sm pqa-text-gold-4 lg:font-bold mt-4">level {{index+1}} </p>
        </div>
      </li>
    </ul>
  </section>

  <footer class="lg:px-20  pqa-blue-5 relative">

    <aside class="border-b border-gray-400 py-12 ">
      <ul class=" lg:grid lg:grid-cols-3 lg:gap-20 text-white">  
        <li>
          <div class="">
              <img src="/assets/pqa-logo.png" alt="" class="h-20 w-20">
              <h1 class="lg:text-3xl lg:font-bold font-play-fair">Philippine Quality Award</h1>
              <p class="lg:text-sm lg:leading-4 lg:mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus at nam, blanditiis iure saepe tempore numquam eaque reiciendis provident id suscipit modi iste molestias sint, ad, quod ex explicabo ratione!</p>
              <p class="lg:text-sm pqa-text-gold-2 lg:mt-4 ">Read more   <i class="fa-solid fa-chevron-right lg:ml-2 lg:text-xs "></i> </p>
              
          </div>
        </li>
        <li>
          <div class="">
             
              <p class="lg:font-bold lg:text-xl uppercase">Links</p>
             <ul>
              <li> <a href="#" class="block lg:text-sm "> Awardess and Recipient  </a></li>
              <li> <a href="#" class="block lg:text-sm "> Compotititveness and Innovation Group  </a></li>
              <li> <a href="#" class="block lg:text-sm "> Department of Trade amd Industy  </a></li>
              <li> <a href="#" class="block lg:text-sm "> Downoad Forms  </a></li>
              <li> <a href="#" class="block lg:text-sm "> Feedback Form  </a></li>
              <li> <a href="#" class="block lg:text-sm "> Form and Conditions  </a></li>
              <li> <a href="#" class="block lg:text-sm "> Privacy Policy  </a></li>
             </ul>
              
          </div>
        </li>
        <li>
          <div class="">
             
            <p class="lg:font-bold lg:text-xl uppercase">Contact</p>
             <ul>
              <p class="lg:text-sm"> z/f  HFGV Building 305</p>
              <p class="lg:text-sm"> Son Git J. Putat Avevnue 3z00,</p>
              <p class="lg:text-sm mt-4"> Email pqa@dti.@gov.ph</p>
             </ul>
  
             <ul class="text-white lg:flex py-2">
              <li class="px-2">
                <img class="lg:h-6 lg:w-6" src="/assets/fb-logo.svg" alt="" />
              </li>
              <li class="px-2">
                <img class="lg:h-6 lg:w-6" src="/assets/twitter-logo.svg" alt="" />
              </li>
              <li class="px-2">
                <img class="lg:h-6 lg:w-6" src="/assets/indeed-logo.svg" alt="" />
              </li>
            </ul>
              
          </div>
        </li>
        
      </ul>
  

    </aside>

    <aside class="py-12 ">
      <ul class=" lg:grid lg:grid-cols-3 lg:gap-20 text-white">  
        
        <li>
          <div class="">
             
          
            <h1 class="lg:text-2xl lg:font-bold font-raleway ">Republic of the Philippines</h1>
            <p class="lg:text-sm lg:leading-4 lg:mt-2">Lorem ipsum do Lorem ipsum dolor sit amet consectetur, adipisicing elit.ar</p>
          
              
          </div>
        </li>

        <li>
          <div class="">
             
              <p class="lg:font-bold lg:text-xl uppercase">About GOVPH</p>
              <p class="lg:text-sm lg:leading-4 lg:mt-2">Lorem ipsum do Lorem ipsum dolor sit amet consectetur, adipisicing elit.ar</p>
              <ul class="mt-6">
                <li> <a href="#" class="block lg:text-sm ">GOVPH  </a></li>
                <li> <a href="#" class="block lg:text-sm "> Open Data Portal  </a></li>
                <li> <a href="#" class="block lg:text-sm "> Offical Website  </a></li>
               </ul>
          </div>
        </li>
        <li>
          <div class="">
             
              <p class="lg:font-bold lg:text-xl uppercase">Goverment Link</p>
              <ul class="">
                <li> <a href="#" class="block lg:text-sm  mt-1 "> Office of the President </a></li>
                <li> <a href="#" class="block lg:text-sm  mt-1 "> Office of the Vice President  </a></li>
                <li> <a href="#" class="block lg:text-sm  mt-1 "> Senate of the Philippines</a></li>
                <li> <a href="#" class="block lg:text-sm  mt-1 "> House of the Presentatices</a></li>
                <li> <a href="#" class="block lg:text-sm  mt-1 "> Supreme Court</a></li>
                <li> <a href="#" class="block lg:text-sm  mt-1 "> Court of Appleals</a></li>
                <li> <a href="#" class="block lg:text-sm  mt-1 "> Sandiganbayan</a></li>
               </ul>
          </div>
        </li>
      </ul>

    </aside>
<!-- <div class="lg:absolute lg:left-10 lg:bottom-0 -z-0">
  <img src="/assets/republic.png" alt="" class="lg:h-60 lg:2-60 ">
</div>
     -->
  </footer>
  
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
