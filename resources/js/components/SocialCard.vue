

<template>
    <li class="lg:mb-2  pl-6 py-2 rounded  ">
        <div>
          <div class="lg:mb-3">

            <TextWithBottomBorder>
                {{ label }}
            </TextWithBottomBorder>
          </div>

          <div class="lg:grid-col-3   ">
            <img :src="image" alt="" class="lg:h-40 w-full">
          </div>
        </div>
      </li>
</template>

<script>
    export default {

        props: {
            label: {
                type: String,

            },
            link: {
                type: String,
                default: '#'
            },
            image: {
                type: String,
            },
        },
        
    }
</script>

<style  scoped>

</style>