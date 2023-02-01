<template>
    
    <Link  :class="['text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md font-raleway', active ? 'pqa-gold-3' : '' ]">
                 
          <slot>


          </slot>
      </Link>
</template>

<script>

import {Link} from '@inertiajs/vue3'

    export default {

        props: {
            active: {
                type: Boolean,
               
            },
        },
        components: {
            Link,
        },
    }
</script>

<style lang="scss" scoped>

</style>