

<template>
    <div :class="['lg:hidden fixed top-0 z-20 pqa-blue-1 h-full transition-all overflow-hidden  ', isOpen ? 'w-60 ' : 'w-0'] ">
        <aside>
            <div class="flex items-center justify-center ">
                <div class="md:w-96 rounded shadow-lg p-5 bg-indigo-700">
                    <p class="pt-4 text-sm leading-5 pr-12 text-white"> Join Tailwind UI Kit’s discord community and kickstart your next project </p>
                </div>
            </div>
        </aside>
        <ul>
            <li> 
            <button href="#" class="text-white text-sm p-4 border-white w-full text-left "> Home </button>
            </li>
            <li> 
            <button href="#" class="text-white text-sm p-4 border-white w-full text-left "> Home  >
                <ul class="pl-4 py-2">
                    <li> Option 1</li>
                    <li> Option 1</li>
                    <li> Option 1</li>
                    <li> Option 1</li>
                </ul>
            </button>
                
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