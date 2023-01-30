

<template>
    <div :class="['lg:hidden fixed top-0 z-20 pqa-blue-1 h-full transition-all overflow-hidden', isOpen ? 'w-60 md:w-2/3' : 'w-0'] ">
        <aside>
        </aside>
        <ul>
            <li> 
            <button href="#" class="text-white text-sm p-4 border-white w-full text-left "> Home </button>
            </li>
            <li> 
            <button href="#" class="text-white text-sm p-4 border-white w-full text-left "> Home </button>
            </li>
            <li> 
            <button href="#" class="text-white text-sm p-4 border-white w-full text-left "> Home </button>
            </li>
            <li> 
            <button href="#" class="text-white text-sm p-4 border-white w-full text-left "> Home </button>
            </li>
            <li> 
            <button href="#" class="text-white text-sm p-4 border-white w-full text-left "> Home </button>
            </li>
            <li> 
            <button href="#" class="text-white text-sm p-4 border-white w-full text-left "> Home </button>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {

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