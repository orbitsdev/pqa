<template>
    <div :class="['menu h-6 w-6 py-0.5 flex flex-col justify-around cursor-pointer ', isOpen ? 'ani': ''  ]">
            <div class="  bar bar-1  rounded-full h-0.5 pqa-blue-1 " ></div>
            <div class="  bar bar-2  rounded-full h-0.5 pqa-blue-1 " ></div>
            <div class="  bar bar-3  rounded-full h-0.5 pqa-blue-1 " ></div>
    </div>
</template>

<script>
    export default {
        props: {
            isOpen: {
                type: Boolean,
                default: false
            },
        }, 
    }
</script>

<style  scoped>
.bar{
    transition: all 0.3s;
}

.menu .bar-1 , .bar-2 ,.bar-3{
    width: 100%;
}

.menu:hover .bar-2{
    width: 100%;
} 

.ani .bar-1 {
    transform: translate( 0px, 4px ) rotate(45deg);
}
.ani .bar-3 {
    transform: translate( 0px, -5px ) rotate(-45deg);
}
.ani .bar-2{
    display: none;
}
</style>