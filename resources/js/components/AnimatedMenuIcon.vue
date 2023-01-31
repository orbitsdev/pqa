<template>
    <div class="menu-icon" :class="{ active: isOpen }" >
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
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

<style  scoped>

.menu-icon {
    width: 18px;
    height: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    cursor: pointer;
  }
  
  .bar {
    width: 100%;
    height: 2px;
    background: #fff;
    transition: all 0.3s;
  }
  
  .menu-icon.active .bar:first-child {
    transform:  translate(0px, 7px)  rotate(45deg);
  }
  
  .menu-icon.active .bar:nth-child(2) {
    opacity: 0;
  }
  
  .menu-icon.active .bar:last-child {
    transform: translate(0px,-7px) rotate(-45deg);
  }
</style>