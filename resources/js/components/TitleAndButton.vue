

<template>
    <aside class="py-2  md:py-0 lg:py-2  ">
        <div class="flex items-center  justify-between  md:flex md:justify-between md:items-center lg:flex lg:justify-between lg:items-center">

            <slot name="title">
                Title HEre
            </slot>

            <slot name="button">
                    Button Here
            </slot>
         
        </div>
      </aside>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>