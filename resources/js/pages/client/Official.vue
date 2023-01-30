<template>
  <SlideBar :isOpen="isMenuOpen" />
  <!-- <DtiSection/> -->

  <Nav @toggleMenu="isMenuOpen = !isMenuOpen" :isMenuOpen="isMenuOpen"  class="sticky lg:relative  top-0 "/>

  <!-- CAROSEL -->

  <section class="lg:bg-white  md:pb-6 lg:pb-40 relative">
    <aside class="bg-red">
      <v-carousel
        hide-delimiters
        :color="'#ffff'"
        delimiter-icon="mdi-square"
        cycle
        class="h-60 md:h-96 lg:h-3/4"
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

        <v-carousel-item src="/assets/example4.png" cover></v-carousel-item>

        <v-carousel-item src="/assets/example3.jpg" cover></v-carousel-item>
      </v-carousel>
      <div class="lg:h1"></div>
    </aside>

    <!-- appy in cclient cannot be absolute  md:mx-10 md:absolute md:inset-x-0  md:bottom-0 lg:absolute lg:inset-x-0 lg:bottom-0  -->
    <aside
      class="bg-white shadow-md pqa-border-bottom md:border-b-2 md:mt-6 md:mx-10 lg:absolute lg:inset-x-0 lg:bottom-0 lg:mx-20 lg:mb-0 z-20"
    >
      <ul class=" px-5 py-2 md:grid md:py-0 md:grid-cols-4 lg:grid-cols-4 gap-2">
        <StepCard v-for="step in steps" :key="step" />
      </ul>
    </aside>
  </section>
  <!-- NEWS -->

  <section class="hidden  md:px-10 lg:px-20 lg:mt-10">
    <div class=" md:grid grid-cols-12 md:gap-4 lg:gap-8">
      <aside class="md:col-span-12 lg:col-span-9">
        <aside class="">
          <TitleAndButton>
            <template #title>
              <TextWithBottomBorder> News </TextWithBottomBorder>
            </template>
            <template #button>
              <GoldButton> See all news </GoldButton>
            </template>
          </TitleAndButton>
          <aside class="md:mb-5 lg:mb-10">
            <div>
              <ul
                class="md:mt-4 grid grid-cols-12 md:gap-x-2 lg:gap-x-4 md:gap-y-4"
              >
                <NewsCard v-for="n in news" :key="n" />
              </ul>
            </div>
          </aside>

          <TitleAndButton>
            <template #title>
              <TextWithBottomBorder> Artilces </TextWithBottomBorder>
            </template>
            <template #button>
              <GoldButton> See all articles </GoldButton>
            </template>
          </TitleAndButton>

          <aside class="mt-4">
            <ul class="mt-2">
              <ArticleCard v-for="n in articles" :key="n" />
            </ul>
          </aside>
        </aside>
      </aside>
      <aside class="md:hidden lg:block lg:col-span-3">
        <ul class="">
          <SocialCard :label="'Facebook'" :image="'/assets/cover1.png'" />
          <SocialCard :label="'Youtube'" :image="'/assets/pqa-channel.png'" />
        </ul>
      </aside>
    </div>
  </section>

  <NewsSectionForMobile class="md:hidden"/>

  <section class="py-8 px-5 md:px-10  md:py-6 lg:px-20 lg:py-32 bg-gray-100">
    <ul class="grid grid-cols-2 md:grid md:grid-cols-4">
      <OrganizationCard :organizations="organizations" />
    </ul>
  </section>

  <Footer />
</template>

<script>
import DtiSection from "./DtiSection.vue";
import Nav from "./Nav.vue";
import Footer from "./Footer.vue";
import NewsSectionForMobile from "./NewsSectionForMobile.vue";
import SlideBar from "../../components/SlideBar.vue";
export default {
  components: {
    SlideBar,
    DtiSection,
    Nav,
    Footer,
    NewsSectionForMobile
  },
  data() {
    return {
      isMenuOpen: false,
      news: [1, 2, 3, 4],
      articles: [1, 2],
      steps: [1, 2, 3, 4],
      organizations: [1, 2, 3, 4, 6],
      
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
