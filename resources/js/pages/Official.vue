

<template>
    <div class="bg-red-500 py-10">
            Official Page

            {{ status }}
    </div>
</template>

<script>
    export default {
        props: {
            status: {
                type: String,
            },
        },
    }
</script>

<style  scoped>

</style>