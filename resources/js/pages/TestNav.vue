<template>
    <div class="min-h-screen bg-gray-100">
        <ul class="p-4">
            <li>
                <Link preserve-scroll  class="bg-white shadow lg p-4   my-1 inline-block underline text-blue-600 font-bold" href="/page-1"> Page 1</Link>
            </li>
            <li>
                <Link preserve-scroll  class="bg-white shadow lg p-4   my-1 inline-block underline text-blue-600 font-bold" href="/page-2"> Page 2</Link>
            </li>
            <li>
                <Link preserve-scroll  class="bg-white shadow lg p-4   my-1 inline-block underline text-blue-600 font-bold" href="/page-3"> Page 3</Link>
            </li>
        </ul>
    </div>
</template>

<script>
import {Link} from '@inertiajs/vue3'
    export default {
        components: {
            Link,
        },
    }
</script>

<style lang="scss" scoped>

</style>